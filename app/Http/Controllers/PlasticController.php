<?php

namespace App\Http\Controllers;

use App\Plastic;
use Illuminate\Http\Request;

class PlasticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Plastic::create([
            
            'name' => $request->name,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function show(Plastic $plastic)
    {
        $plastic = Plastic::all();
        
        $response = [
            'data' => [
                'plastics' => $plastic,
                ],
            ];
        return response($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function edit(Plastic $plastic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plastic $plastic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plastic $plastic)
    {
        //
    }
}
