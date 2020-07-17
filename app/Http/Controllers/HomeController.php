<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class HomeController extends Controller
{
    //
    public function index() {

        $car = 'Cars Shop';
        $cars = Car::all();
        //dd($cars);
        return view('welcome', compact('car', 'cars'));
    }

    public function saveCar(Request $request) {

        $car = new Car();
        $car->name = $request->name;
        $car->description = $request->description;
        $car->save();
//        $car = new Car();
//        $data = $request->all();
//        $car->create($data);
//        $car->save();
        dd($request->all());
        //return view('welcome', compact('title'));
    }
}
