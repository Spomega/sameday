<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Requests;
use App\Repositories\CarRepository as ViewCar;



class CarController extends Controller
{
    //
    
    
     protected $car;
    
     public function __construct(ViewCar $car) {
       
        $this->car = $car;
    }
    
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index()
    {
	  return view('pages.addcar');
    }
    
    
    public function viewcars()
    {
        $cars = $this->car->all();
        return view('pages.viewcar',  compact('cars'));
    }
    
    
     public function details($id)
    {
        $car =  Car::find($id);
        return view('pages.cardetails',  compact('car'));
       
    }
    
    
     public function listing()
    {
        $cars = $this->car->all();
       return view('pages.listings',  compact('cars'));
       
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $car = new Car();
         
         $car->vinnumber = $request->input('vinnumber');
         $car->carmake = $request->input('carmake');
         $car->caryear = $request->input('caryear');
         $car->price = $request->input('price');
         $car->color = $request->input('color');
         $car->milleage = $request->input('milleage');
         $car->vehicletype = $request->input('vehicletype');
         $car->enginetype = $request->input('enginetype');
         $car->transmission = $request->input('transmission');
         $car->fuel = $request->input('fuel');
         $car->damage = $request->input('damage');
         $car->status = $request->input('status');
         
         
               // upload the image1 //
       
      $file = $request->file('image1');
      $destination_path =  'localhost:8000'.'/public/images/cars/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $car->image1 = $destination_path . $filename;
      
      
            // upload the image 2//
      $file = $request->file('image2');
      $destination_path =  'localhost:8000'.'/public/images/cars/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $car->image2 = $destination_path . $filename;
         
        
            // upload the image 3 //
      $file = $request->file('image3');
      $destination_path =  'localhost:8000'.'/public/images/cars/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $car->image3 = $destination_path . $filename;
      
            // upload the image //
      $file = $request->file('image4');
      $destination_path =  'localhost:8000'.'/public/images/cars/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $car->image4 = $destination_path . $filename;
      
      
            // upload the image //
      $file = $request->file('image5');
      $destination_path =  'localhost:8000'.'/public/images/cars/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $car->image5 = $destination_path . $filename;
      
      
      
      $car->save();
      
      
       return redirect('sameday/viewcar')->with('message','Car Details Created Successfully'); 
        
    }
    
    public function delete($id)
    {
        
       if(isset($id)) {
        $record =Car::find($id);
        if($record) {
           Car::find($id)->delete();
            return redirect('sameday/viewcar')->with('message','Car Details Deleted Successfully');;
        }
    }
         
    }
    
    
}
