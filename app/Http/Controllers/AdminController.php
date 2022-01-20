<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\models\User;
use App\Models\cars;
use App\Models\Clients;
use App\Models\rentals;

class AdminController extends Controller
{
    public function user()
    {
        $user=user::all();
        return view("admin.users", compact("user"));
    }
    public function deleteuser($id)
    {
        $user=user::find($id);
        $user->delete();

        return redirect()->back();
    }
    public function car()
    {
        $car=cars::all();
        return view("admin.addedcar", compact("car"));
    }
    public function orderapproval() {
        $order = rentals::all();
        return view('admin.rentals',compact('order'));
    }
    public function approved($id) {
        $order = rentals::find($id);
        $order->status = 'approved';
        $order->save();
        return redirect()->back();
    }

    public function declined($id) {
        $order = rentals::find($id);
        $order->status = 'declined';
        $order->save();
        return redirect()->back();
    }
    public function confirm($id) {
        $order = rentals::find($id);
        $order->Booked = 'booked';
        $order->save();
        return redirect()->back();
    }
    public function deletecar($id)
    {
        $car=cars::find($id);
        $car->delete();

        return redirect()->back();
    }
    public function editcar($id)
    {
        $car=cars::find($id);
        $car->edit();

        return redirect('rentals')->back();
    }

    public function add_clients(){
        return view('admin.add_clients');
    }

    public function upload(Request $request){
        $client = new Clients;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('clientimage',$imagename);

        $client->image = $imagename;

        $client->name = $request->name;
        $client->message = $request->message;
        $client->expatriate = $request->expatriate;



        $client->save();
        return redirect()->back()->with('message', 'client Added Succesfully');
    }

}
