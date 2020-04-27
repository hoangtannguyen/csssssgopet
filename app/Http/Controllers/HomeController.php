<?php

namespace App\Http\Controllers;
use App\Product;
use App\Skill;
use App\Contact;
use App\Customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(8)->where('category_id',1)->get();
        $phukiens = Product::take(8)->where('category_id',2)->get();
        $noibats = Product::take(8)->where('category_id',3)->get();
        $gapnhams = Product::take(8)->where('category_id',4)->get();
        $sanpham_khuyenmai = Product::take(8)->where('promotion_price','<>',0)->get();
        $sanpham_banchay = Product::take(8)->where('selling',1)->get();
        return view('home.index', compact('products' , 'sanpham_khuyenmai', 'sanpham_banchay','phukiens','noibats'));
    }

    public function loaisp($type){
        $sp_theoloai = Product::where('id_type',$type )->paginate(8);
         $sp_lienquan = Product::take(4)->where('id_type','<>',$type)->get();
        return view('home.shop' , compact('sp_theoloai','sp_lienquan'));
    }

    public function loaipk($acce){
        $pk_theoloai = Product::where('id_acce',$acce)->paginate(8);
        $pk_lienquan = Product::take(4)->where('id_acce','<>',$acce)->get();
        return view('home.shopacce',compact('pk_theoloai' ,'pk_lienquan'));
    }

    public function chitietsp(Request $request){
       $sanpham = Product::where('id' , $request->id)->first();
        $sp_tuongtu = Product::take(4)->where('id_type',$sanpham->id_type)->get();
        return view('home.single' ,compact('sanpham' ,'sp_tuongtu' ));
     }

     public function search(Request $request){

            if(!$request->key){
                return redirect()->route('home');
            }

         $product = Product::where('name','LIKE','%' .  $request->key . '%')->orWhere('price',$request->key)->paginate();
        return view('home.search',compact('product'));
        }

        public function skill(){
            $loai_tin = Skill::all();
            return view('home.blog',compact('loai_tin'));
        }

        public function skillct(Request $request)
        {
            $ct_lt = Skill::Where('id' , $request->id)->first();
            return view("home.blogsing" , compact('ct_lt'));
        }

        public function contact(){
            $contact = Contact::all();
            return view('home.contac',compact('contact'));
        }

        public function dathang(Request $request){
            $customer =  Customer::all();



        }





}
