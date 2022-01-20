<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cars;
use Illuminate\Database\Eloquent\Model;

class CarsController extends Controller
{
    public function index()
    {
        return view("car-page");
    }
    public function addCar()
    {
        return view("addcar");
    }

    public function car() {
        $car = cars::all();
        return view('cars', compact('car'));
    }

   


    public function getAllCars(){
        $cars = cars::where('Booked','available')->get();
        // return view('cars', compact('cars'));
        return view('cars', [
            'cars'=> $cars
        ]);


    }

    //a method to create a new product
public function postcar(Request $request){


$cars= new cars();
$cars->brand=$request->input('brand');
$cars->mileage=$request->input('mileage');
$cars->model=$request->input('model');
$cars->description=$request->input('description');
$cars->transmission=$request->input('transmission');
$cars->seats=$request->input('seats');
$cars->price=$request->input('price');
$cars->luggage=$request->input('luggage');
$cars->fuel=$request->input('fuel');
$cars->year=$request->input('year');
$cars->Booked='available';


if($request->hasFile('image'))
{
$files=[];
foreach($request->file('image') as $file)
{
$extension=$file->getClientOriginalExtension();//getting image extension
$filename=time().rand(1,100) .'.'. $extension;
$file->move('Products/Photos/',$filename);
$files=$filename;

}
$cars->images=$files;
}

$cars->save();
return redirect()->back();


    }
    public function store()
    {

        $this->validate($this->request, [
            'cars.brand' => 'required',
            'cars.model' => 'required',
            'cars.fuel' => 'required',
            'cars.price' => 'required',
            'cars.mileage' => 'required',
            'cars.year' => 'required',
            'cars.transmission' => 'required',
            'cars.description' => 'required',
            'cars.seats' => 'required',
            'cars.luggage' => 'required',
        ]);
        // $cars = cars::create($request->all());
        // return $cars;
    }

}



