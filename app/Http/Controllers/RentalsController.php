<?php

namespace App\Http\Controllers;

use App\Models\cars;
use App\Models\rentals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RentalsController extends Controller
{
    public function rentals() {
        $order=rentals::all();
        return view("admin.rentals", compact("order"));
    }

    public function index()
    {
        return view("cart");
    }
    public function rent($id)
    {
        $car=cars::where('id',$id)->get();
        return view("cart", compact("car"));

    }
    public function userOrder() {
        $cars=rentals::join('cars','rentals.brand','=', 'cars.id')
        ->select('cars.*','rentals.id as rentals_id')->get();
        return view('myOrder',compact('cars'));
        dd($cars);
    }

    public function cancelorder($id)
    {
        $order=rentals::find($id);
        $order->cancel();

        return redirect()->back();
    }


public function display(){
    $cars=rentals::join('cars','rentals.brand','=', 'cars.id')
    ->select('cars.*','rentals.id as rentals_id')->get();
    return view('myOrder',compact('cars'));
    dd($cars);

}


    public function orders(Request $request)
    {

    $product=new rentals();
     $product->brand=$request->get('id');
    $product->email=$request->input('email');
    $product->pick_up_location=$request->input('pick_up_location');
    $product->days=$request->input('days');
    $product->pick_up_date=$request->input('pick_up_date');
    $product->pick_up_time=$request->input('pick_up_time');
    $product->return_date=$request->input('return_date');
    $product->status=$request->get('status');

    $product->save();

    $id=$request->input('id');
    DB::update('update cars set booked = ? where id = ?', ['booked',$id]);

    // return redirect()->back();
    return back()->with(['message' => ' successfully sent']);


    }

 }
