<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Region;
use App\Models\Trajet;

class ClientdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $regions = Region::all();
        return (view('ClientDash/dashboard',compact('regions')));
        
        
      
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
    }

    public function store(Request $request)
    {
          
           
        $client = Client::create($request->all());
        return redirect('dashboard')->with('flash_message','reservation  valider');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //     $student = Student::find($id);
    //     return view('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getByRegion($regionId)
    {
        $trajets = Trajet::where('region_id', $regionId)->get();
    
        return response()->json($trajets);
    }
    
    public function getTarif($trajetId){
        $trajet = Trajet::findOrFail($trajetId);
        $tarif = $trajet->tarif;
        return response()->json(['tarif'=>$tarif]);


    }
    
   
     

}
