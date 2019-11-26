<?php

namespace App\Http\Controllers;

use App\Mybag;
use Illuminate\Http\Request;

class MybagController extends Controller
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
    public function create(Request $request)
    {
        $createdBag = Mybag::create([
            
            'user_id' => $request->user_id,
            'name' => $request->name,
        
        ]);

        $response = [
            'Bag' => [
                'Bag' => $createdBag,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mybag  $mybag
     * @return \Illuminate\Http\Response
     */
    public function show(Mybag $mybag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mybag  $mybag
     * @return \Illuminate\Http\Response
     */
    public function edit(Mybag $mybag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mybag  $mybag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mybag $mybag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mybag  $mybag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mybag $mybag)
    {
        //
    }
}
