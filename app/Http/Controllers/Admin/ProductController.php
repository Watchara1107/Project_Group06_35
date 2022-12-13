<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::Paginate(4);
        return view('admin.product.index', compact('product'));
    }
    public function createform()
    {
        return view('admin.product.create');
    }
    public function insert(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        if ($request->hasFile('image')) {

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->image = $filename;
        } else {

            $product->image = 'nopic.jpg';
        }

        $product->save();
        return redirect()->route('product');
    }
    public function editform($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')) {

            $product = Product::find($id);

            // ลบรูปภาพ

            if ($product->image != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/product/' . $product->image);
            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->image = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
        } else {

            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->update();
        }
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        $product->update();
        return redirect()->route('product');
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('product');
    }
}
