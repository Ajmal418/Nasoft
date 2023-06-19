<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function view(){
        return view('checkout');
    }

    public function upsell_1(){

        return view('upsell_1');
    }

    public function upsell_2(){
        return view('upsell_2');
    }

    public function upsell_3(){
        return view('upsell_3');
    }

    public function orderlist(request $request){
               $id=$request->session()->get('id');
               
        $data=DB::table('member_orders')
        ->select('product_name','price')
        ->where('member_id','=' ,$id )
        ->get();
        // dd($data);
        return view('orderlist')->with(['data' => $data]);
    }
    public function task_sub(request $request){
       
   
        $data=[
            $fname = $request->post('fname'),
            $lname = $request->post('lname'),
            $Username = $request->post('Username'),
            $email = $request->post('email'),
            $address = $request->post('address'),
            $address_2 = $request->post('address_2'),
            $country = $request->post('country'),
            $pincode = $request->post('pincode'),
            $state = $request->post('state'),
            $card_name = $request->post('card_name'),
            $card_no = $request->post('card_no'),
            $Payment_type = $request->post('Payment_type'),
            $cvv = $request->post('cvv'), 
            $expiration = $request->post('expiration'),
            $user_check2 = $request->post('user_check2'),
            $user_check1 = $request->post('user_check1')
        ];
        
        // dd($data);
                
          
        $query=DB::table('member') 
        ->insertGetId(['fname'=> $fname,'lname'=> $lname,'Username'=> $Username,'email'=> $email,'address'=> $address,'address_2'=> $address_2,'country'=> $country,'pincode'=> $pincode,'state'=> $state,'card_name'=> $card_name,'card_no'=> $card_no,'Payment_type'=> $Payment_type,'cvv'=> $cvv,'expiration'=> $expiration,]);

        $request->session()->put(['id' => $query,'fname' => $fname,'lname' => $lname,'Username' => $Username,'email' => $email,'address' => $address,'address_2' => $address_2,'country' => $country,'pincode' => $pincode,'state' => $state,'card_name' => $card_name,'card_no' => $card_no,'Payment_type' => $Payment_type,'cvv' => $cvv,'expiration' => $expiration]);
           
            
        $data=DB::table('member_orders')
        ->insert(['product_name'=>"jonson_baby", 'price'=>'20','member_id'=> $query,]);  

        if($query== true && $data ==true){

            return view('upsell_1');
        }
       
        

    }

    public function upsell(request $request){
        
        $data=[
            $product = $request->post('product'),
            $price = $request->post('price'),
            $key = $request->post('foreign_key')
        ];
      
        $request->session()->put(['product' => $product,'price' => $price,'key' => $key,]);
        $data=DB::table('member_orders')
        ->insert(['product_name'=>$product, 'price'=>$price,'member_id'=> $key,]);


    }

    

    
    
}