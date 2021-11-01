<?php

namespace App\Http\Controllers;

use App\Http\Requests\admin\ProductRequest;
use App\Http\Requests\Admin\Products\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Utilities\ImageUploader\ImageUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\Promise\is_settled;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.list', [
            'products' => Product::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create')->with([
            'categories' => Category::all('title', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\admin\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        // create a record
        $product = Product::create([
            'title' => $validatedData['title'],
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
            'description' => $validatedData['description'],
            // todo: fix authentication to insert
            'user_id' => 1,
        ]);

        $paths = $this->uploadProductFiles($product, $validatedData);

        $product->update([
            'thumbnail_url' => $paths['thumbnail'],
            'demo_url' => $paths['demo'],
            'source_url' => $paths['source'],
        ]);

        return back()->with([
            'success' => __('product.created'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit')->with([
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, product $product)
    {

        // Todo : fix user id
        $validatedData = $request->validated() + ['user_id' => 1];
        
        // The three images should be uploaded to edit complete row in database !
        if(!isset($request->demo_url) || !isset($request->thumbnail_url) ||!isset($request->source_url))
        {
            $product->update($validatedData);

            return redirect(route('product.index'))->with([
                'success' => __('product.updated'),
            ]);
        }

        $paths = $this->uploadProductFiles($product,$validatedData);

        $validatedData = array_merge($validatedData , [
            'thumbnail_url' => $paths['thumbnail'],
            'demo_url' => $paths['demo'],
            'source_url' => $paths['source'],
        ]);


        $product->update($validatedData);

        return redirect(route('product.index'))->with([
            'success' => __('product.updated'),
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        // TODO: FIX FILE REMOVER !
        /* if(File::exists($product->demo_url)) File::delete(storage_path($product->demo_url));
        if(File::exists($product->thumbnail_url)) File::delete(storage_path($product->thumbnail_url));
        if(File::exists($product->sourceUrl)) File::delete($product->sourceUrl()); */

        $product->delete();

        return back()->with([
            'succsess' => __('product.deleted'),
        ]);
    }

    private function uploadProductFiles(Product $product, $validatedData)
    {
        $basePath = 'products/' . $product->id . '/';

        $publicFiles = [
            'thumbnail' => $validatedData['thumbnail_url'],
            'demo' => $validatedData['demo_url'],
        ];

        $sourcePath = 'app/private/'.$basePath . 'source_' . $validatedData['source_url']->getClientOriginalName();

        try {

            $paths = ImageUploader::multiUpload('public', $publicFiles, $basePath);

            ImageUploader::upload('private', $validatedData['source_url'], $sourcePath);
        } catch (\Exception $e) {
            return back([
                'filed' => $e->getMessage()
            ]);
        }

        $paths += [
            'source' => $sourcePath,
        ];

        return $paths;
    }

    public function downloadDemo(Product $product)
    {
        return response()->download(public_path($product->demoUrl()));
    }

    public function downloadSource(Product $product)
    {
        return response()->download(storage_path($product->source_url));
    }
}
