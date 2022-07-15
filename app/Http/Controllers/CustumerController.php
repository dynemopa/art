<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\customer;
class CustumerController extends Controller
{
    public  function index()
    {
        return view('customer');
    }
    public  function log()
    {
        return view('front');
    }
    public  function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
               
                'address' => 'required',
                'gender' => 'required',
                'phone' => 'required',
             ]
         );
       
         $customer=new customer;
         $customer->customer_name=$request['name'];
         $customer->customer_email=$request['email'];
         
         $customer->address=$request['address'];
         $customer->gender=$request['gender'];
         $customer->phone=$request['phone'];
         $customer->save();
         return redirect('/customer/view');
        
    }
    public function view()
    {
        $customers=customer::get();
  
        $data= compact('customers');
        return view('customer-view',($data));
    }
    public function  delete($id)
    {
        $customer=customer::where('customer_id','=',$id)->delete();
        return redirect()->back();
    }
    public function  edit($id)
    {
        $customers=customer::where('customer_id','=',$id)->first();    

     
        return view('customer-edit',compact('customers'));
          
            
        }
        public function update($id,Request $request)
        {
            $customers=customer::find('customer_id','=',$id); 
            $customer->customer_name=$request['name'];
            $customer->customer_email=$request['email'];
            
            $customer->address=$request['address'];
            $customer->gender=$request['gender'];
            $customer->phone=$request['phone'];
            $customer->update();
            return redirect('/customer/view');
        }

    
   
}


