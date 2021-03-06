<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $repository;

    public function __construct(Product $product)
    {
        $this->repository = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->all();
        
        return view('admin\product', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\productCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $product = $this->repository->create($request->all());

        if (isset($request->allFiles()['images'])) {
            for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                $productImage = new ProductImage();
                $productImage->user_id = $request->input('user_id');
                $productImage->product_id = $product->id;
                $productImage->image = $file->store('produtos/' . $product->id);
                $productImage->save();
                unset($productImage);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$product = $this->repository->find($id))
            return redirect()->back();

        return view('admin\productShow', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$product = $this->repository->find($id))
            return redirect()->back();

        return view('admin\productEdit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProductRequest $request, $id)
    {
        if (!$product = $this->repository->find($id))
            return redirect()->back();

        $product->update($request->all());

        if (isset($request->allFiles()['images'])) {
            for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                $productImage = new ProductImage();
                $productImage->user_id = $request->input('user_id');
                $productImage->product_id = $product->id;
                $productImage->image = $file->store('produtos/' . $product->id);
                $productImage->save();
                unset($productImage);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$product = $this->repository->find($id))
            return redirect()->back();

        foreach ($product->productImage as $image) {
            if($image->delete())
                Storage::delete($image->image);
        }

        $product->delete();

        return redirect()->route('products.index');
    }

    public function destroyImage($id)
    {
        
        $productImage = new ProductImage();
        if (!$image = $productImage->find($id)) {
            $return['success'] = false;
            $return['message'] = 'Ocorreu um erro, tente novamente mais tarde!';
            echo json_encode($return);
            return;
        }

        if($image->delete())
            Storage::delete($image->image);

        $return['success'] = true;
        $return['message'] = 'Imagem deletada com sucesso!';
        echo json_encode($return);
        return;
    }
}
