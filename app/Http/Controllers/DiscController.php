<?php

namespace App\Http\Controllers;

use App\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
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
        $disc = Disc::create([
            'brand_id' => $request->brand()->id,
            'plastic_id' => $request->plastic()->id,
            'name' => $request->name,
            'speed' => $request->speed,
            'turn' => $request->turn,
            'fade' => $request->fade,
            'glide' => $request->glide,
        ]);

        $response = [
            'data' => [
                'disc' => $disc,
                ],
            ];
        return response($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return Disc::create([
        //     'brand_id' => $request->brand_id,
        //     'plastic_id' => $request->plastic_id,
        //     'name' => $request->name,
        //     'speed' => $request->speed,
        //     'turn' => $request->turn,
        //     'fade' => $request->fade,
        //     'glide' => $request->glide,
        // ]);
    }

    public function createDiscData(Request $request)
    {

        // $this->validate($request, [
        //     'brand_id' =>
        //     'plastic_id' =>
        //     'name' => 'required',
        //     'speed' => 'required|min:2',
        //     'turn' =>'required|min:2',
        //     'fade' =>'required|min:2',
        //     'glide' =>'required|min:2',
        // ]);
        
        // $disc = Disc::create([
        //     'name' => $request->name,
        //     'speed' => $request->name,
        //     'turn' => $request->name,
        //     'fade' => $request->name,
        //     'glide' => $request->name,
            
        // ]);
            
            // $response = [
            //     'data' => [
            //         'disc' => $disc,
            //         ],
            //     ];
            // return response($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function show(Disc $disc)
    {
        //
        return Disc::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function edit(Disc $disc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disc $disc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disc $disc)
    {
        //
    }
}
