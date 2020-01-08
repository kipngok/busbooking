<?php

namespace App\Http\Controllers;

use App\Destinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             
        $destinations = Destinations::latest()->paginate(5);

     
        return view('destinations.index',compact('destinations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'from' => 'required',
            'to' => 'required',
            'time' => 'required',
            'distance' => 'required',
            'fare' => 'required',
        ]);
         
          Destinations::create($request->all());
          return redirect()->route('destinations.index')
        ->with('success','Destinations created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function show(Destinations $destinations)
    {
        //
        
        return view('destinations.show',compact('destinations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinations $destinations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinations $destinations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinations $destinations)
    {
        //
    }
}
