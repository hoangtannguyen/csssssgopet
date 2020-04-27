<?php

namespace App\Http\Controllers;
use Mail;
use Cart;
use App\BillDetails;
use App\Bill;
use App\Customer;
use App\Http\Requests\AddressRequest;
use App\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // dd(Cart::getContent());
        // Cart::destroy();
        // dd($request->all());
        $product = Product::find($request->productId);
        // dd($product);
        Cart::add($product->id, $product->name, $product->price, $request->quantity, array('img' => $product->cover_image));
        // dd(Cart::getContent());
        // dd(Cart::getContent());
        return back()->with('success',"  $product->name đã thêm  vào giỏ hàng");
    }

    public function cart(){



        return view('home.cart')->with('success'," đặt hàng thành công");
    }

    public function addcart(){
        $params = [
            'title' => 'Shopping Add Cart',
        ];

// dd($params);
        return view('home.addcart')->with($params);
    }

    public function clear(){
        Cart::clear();

        return back()->with('success',"Đã xóa giỏ hàng");;
    }


    public function update(Request $request)
    {
        // $quantity = ['quantity'=> $request->quantity];
        $quantity = ['quantity' => array(
            'relative' => false,
            'value' => $request->quantity
        )];
        Cart::update($request->id, $quantity);

    }

    public function send_mail(){
        $to_name = "hoang nguyen";
        $to_email = "hoangnguyenn3333@gmail.com";//send to this email

        $email= Cart::getContent();

        // dd($email);

        $data = array( "product"=>$email ); //body of mail.blade.php

        Mail::send('mail.shopping',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('test mail nhé');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });

        return redirect()->route('home');


    }


    public function remove($id){
        Cart::remove($id);
        return back()->with('success',"Đã xóa mặt hàng");;
    }





    public function store(AddressRequest $request){
        // dd(Cart::getContent());

       $customer = new Customer;
       $customer->lastname = $request->lastname;
       $customer->firstname	= $request->firstname;
       $customer->email	= $request->email;
       $customer->address = $request->address;
       $customer->phone	= $request->phone;
       $customer->save();



        $bill = new Bill;
        $bill->customer_id = $customer->id;
        $bill->date_order = date('Y-m-d H:i:s');
        $bill->total = Cart::getSubTotal();
        $bill->payment = $request->paymentMethod;
        $bill->note = $request->note;
        $bill->save();

       foreach (Cart::getContent('items') as $key => $product) {
            $billd = new BillDetails;
            $billd->bill_id = $bill->id;
            $billd->product_id = $key;
            $billd->quantily = $product->quantity;
            $billd->price = $product->price *  $billd->quantily ;
            $billd->save();
        };



        return redirect()->route('cart.checkout');
    }






}
