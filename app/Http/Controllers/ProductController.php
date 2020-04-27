<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductAcce;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index' , compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $type = ProductType::all();
        $acce = ProductAcce::all();

        return view('product.create',compact('category','type','acce'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atribute = $request->all();

        if($request->hasFile('cover_image')){
            // lấy file image
            $image = base64_encode(file_get_contents($request->file('cover_image')));
            $atribute['cover_image'] = 'data:image/;base64,'.$image; //gán thêm đuôi
        }
        // note : form create image phải có enctype="multipart/form-data"
        // dd($atribute);

        Product::create($atribute);
        // dd($product);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('product.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $type = ProductType::all();
        $acce = ProductAcce::all();
        $product = Product::findOrFail($id);
        return view('product.edit' , compact('product','category','type','acce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $atribute = $request->all();

        if($request->hasFile('cover_image')){
            // lấy file image
            $image = base64_encode(file_get_contents($request->file('cover_image')));
            $atribute['cover_image'] = 'data:image/;base64,'.$image; //gán thêm đuôi
        }
        $product->update($atribute);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
        else{
            $product = Product::where('id', $id)->get();
            $product->forceDelete();
        }

        return redirect()->route('product.index');
    }





    public function unactive($id){

         Product::where('category_id',$id)->update(['selling'=>0]);
        return redirect()->route('product.index');

    }
    public function active($id){

         Product::where('category_id',$id)->update(['selling'=>1]);
        return redirect()->route('product.index');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('product.trash', compact('products'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->restore();
        return redirect()->route('product.index')->with('success', " $product->name đã được khôi phục !");
    }
    public function restoreAll()
    {
        $products = Product::onlyTrashed()->get();
        if (count($products) < 1) {
            return redirect()->route('product.trash')->with('error', "Thùng rác rỗng");
        } else {
            Product::onlyTrashed()->restore();
            return redirect()->route('product.index')->with('success', " Tất cả đã được khôi phục !");
        }
    }
    public function delete($id)
    {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->forceDelete();
        return redirect()->route('product.trash')->with('success', "Xóa thành công $product->name !");
    }
    public function deleteAll()
    {
        $product = Product::onlyTrashed()->get();
        if (count($product) < 1) {
            return redirect()->route('product.trash')->with('error', "Thùng rác rỗng !");
        } else {
            Product::onlyTrashed()->forceDelete();
            return redirect()->route('product.trash')->with('success', "Đã xóa tất cả !");
        }
    }
}
