<?php

namespace App\Http\Controllers\Admin;

use App\FileManagement;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;

class FileManagementController extends Controller
{
    public function index()
    {
        $data['title'] = 'List of Product';
        $data ['files'] = FileManagement::orderBy('id','DESC')->paginate(5);
        return view('admin.file-management.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add New File';
        $data['users'] = User::where('role','employee')->get();
        return view('admin.file-management.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $newFile = new FileManagement();

        $newFile->user_id = $request->employee_id;
        $newFile->title = $request->title;
        $newFile->description = $request->description;


        if ($request->hasFile('file')){

            $path = 'files/uploads';
            $img = $request->file('file');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($newFile->files != null && file_exists($newFile->files)){
                unlink($newFile->files);
            }

            $newFile->files = $path .'/'. $file_name;

        }
        $newFile->save();

        return redirect()->route('file-management.index')->with($newFile->user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['title'] = 'Edit Product';
        $data['categories'] = Category::all();
        $data['product']= $product;
        return view('admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required',
            'price'         => 'required',
            'stock'        =>   'required',
            'image'         =>  'mimes:jpeg,png'

        ]);

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->stock = $request->stock;

        if ($request->has('is_featured'))
        {
            $product->is_featured = $request->is_featured;
        }
        else

        {
            $product->is_featured = 0 ;
        }

        if ($request->hasFile('image')){

            $path = 'images/product';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);


            if ($product->image != null && file_exists($product->image)){
                unlink($product->image);
            }

            $product->image = $path .'/'. $file_name;



        }

        $product->save();
        Alert::success('Updated', 'Product has been successfully updated');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image != null && file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
        Alert::success('Success', 'Product Deleted successfully');
        return redirect()->route('product.index');
    }
}
