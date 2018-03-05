<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sale;

class salesController extends Controller
{
   
   public function __construct()
   {
   	$this->middleware('auth');
   }


   public function index()
   {

   	$sales = Sale::paginate(10);
   	return view('sales.index', compact('sales'));
   }

   public function create()
   {
      return view('sales.sell');
   }


   public function sell(Request $request)
   {

      //authenticate request
               $this->validate($request, [
                    'customer'     => 'required',
                    'category'  => 'required',
                    'quantity'   => 'required'
                ]);


                $sales = new Sale([
                    'User_Id' => auth()->user()->id,
                    'Customer_Name' => $request->input('customer'),
                    'Category_Id' => $request->input('category'),
                    'Quantity' => $request->input('quantity'),                    
                    'Amount' => $request->input('quantity') * 6400 ,
                    'Serial' => $request-> input('serial_from')."-".$request-> input('serial_to'),
                    'Status' => "Open"
                ]);

                // dd($sales);

                echo "fire".auth()->user()->id;

                $sales->save();



                // $mailer->sendTicketInformation(Auth::user(), $sales);

                return redirect()->back()->with("status", "Items sold;  with Order ID: #$sales->order_id.");      
   	
   }


   // user sales

}
