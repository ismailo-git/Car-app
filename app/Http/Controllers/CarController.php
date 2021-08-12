<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CarController extends Controller
{
    public function index() {
    

        return view('cars.create');
    }

    public function displayCars() {

        $cars = Car::paginate(8);

        return view('cars.index', [

            'cars' => $cars
        ]);

    }

    public function store(Request $request)
    {
    
            $request->validate([

                'title' => 'required',
                'marque' => 'required',
                'modele' => 'required',
                'carburant' => 'required',
                'boite' => 'required',
                'kilometrage' => 'required',
                'price' => 'required',
                'year' => 'required|date_format:Y',
                'description' => 'required',
                'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
            ]);

            $newImageName = uniqid() . '-' . $request->title . '.' .$request->image_path->extension();

            $request->image_path->move(public_path('images'), $newImageName);

            

            // Car::create([
            
            //     'title' => $request->input('title'),
            //     'slug' => SlugService::createSlug(Car::class, 'slug', $request->title),
            //     'marque' => $request->input('marque'),
            //     'modele' => $request->input('modele'),
            //     'carburant' => $request->input('carburant'),
            //     'boite' => $request->input('boite'),
            //     'kilometrage' => $request->input('kilometrage'),
            //     'price' => $request->input('price'),
            //     'year' => $request->input('year'),
            //     'description' => $request->input('description'),
            //     'image_path' => $newImageName,
            //     'user_id' => auth()->user()->id
            // ]);

            $request->user()->cars()->create([

                'title' => $request->input('title'),
                'slug' => SlugService::createSlug(Car::class, 'slug', $request->title),
                'marque' => $request->input('marque'),
                'modele' => $request->input('modele'),
                'carburant' => $request->input('carburant'),
                'boite' => $request->input('boite'),
                'kilometrage' => $request->input('kilometrage'),
                'price' => $request->input('price'),
                'year' => $request->input('year'),
                'description' => $request->input('description'),
                'image_path' => $newImageName,
                'user_id' => auth()->user()->id

            ]);

            return redirect('/cars')->with('message', 'Votre annonce a bien été ajoutée');

        
    }

    /**
    
    * @param string $slug
    * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
    
        return view('cars.show')
        ->with('car', Car::where('slug', $slug)->first());
    }

    /**
    * @param string $slug
    * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
    
        return view ('cars.edit')
              ->with('car', Car::where('slug', $slug)->first());
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @param string $slug
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $slug) 
    {
        Car::where('slug', $slug)
            ->update([
            
                'title' => $request->input('title'),
                'slug' => SlugService::createSlug(Car::class, 'slug', $request->title),
                'marque' => $request->input('marque'),
                'modele' => $request->input('modele'),
                'carburant' => $request->input('carburant'),
                'boite' => $request->input('boite'),
                'kilometrage' => $request->input('kilometrage'),
                'price' => $request->input('price'),
                'year' => $request->input('year'),
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id

            ]);

            return $this->redirect('/cars')
                    ->with('message', 'Votre annonce a bien été modifiée'); 

    }
}
