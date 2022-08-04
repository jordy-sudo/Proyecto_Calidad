<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;


class CartController extends Controller

{
    public function index(){
        return view('checkout');
    }
    public function indexAbout(){
        return view('about');
    }
    public function dateQuery(Request $request){
        $inicio =$request->input('started_at');
        $fin = $request->input('started_fin');
        $posts = Order::whereBetween('created_at', [$inicio, $fin])->get();
        //dd($inicio,$fin,$posts);
       return view('tobuy',['filtrados'=>$posts,'orders'=>$posts,'sucess'=>$posts]);
    }
    public function indexBuy(){
        $pedidos = Order::where('status','=',0)->get();
        $pedidosSuccess= Order::where('status','=',1)->get();
        //dd($pedidosSuccess);
        return view('tobuy',['orders'=>$pedidos,'sucess'=>$pedidosSuccess, 'filtrados'=>$pedidos]);
    }

    public function shop()

    {

        $products = Product::all();

       //dd($products);

        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);

    }


    public function cart()  {

        $cartCollection = \Cart::getContent();

        //dd($cartCollection);

        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;

    }

    public function remove(Request $request){

        \Cart::remove($request->id);

        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');

    }


    public function add(Request$request){

        \Cart::add(array(

            'id' => $request->id,

            'name' => $request->name,

            'price' => $request->price,

            'quantity' => $request->quantity,

            'attributes' => array(

                'image' => $request->img,

                'slug' => $request->slug

            )

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');

    }


    public function update(Request $request){

        \Cart::update($request->id,

            array(

                'quantity' => array(

                    'relative' => false,

                    'value' => $request->quantity

                ),

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');

    }


    public function clear(){

        \Cart::clear();

        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');

    }

    public function checkout(Request $request){
        $order = new Order();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');
        $order->tracking_no = 'sharma'.rand(1111,9999);
        $order->save();
        return back();
    }





}

