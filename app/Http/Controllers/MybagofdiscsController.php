<?php

namespace App\Http\Controllers;

use App\Mybagofdiscs;
use App\Brand;
use App\Plastic;
use App\Disc;
use Illuminate\Http\Request;

class MybagofdiscsController extends Controller
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
        $createdBagOfDiscs = Mybagofdiscs::create([
            
            'user_id' => $request->user_id,
            'discs_id' => $request->discs_id,
            'mybag_id' => $request->mybags_id,
            
        
        ]);

        $response = [
            'BagOfDisc' => [
                'BagOfDisc' => $createdBagOfDiscs,
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
     * @param  \App\Mybagofdiscs  $mybagofdiscs
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $discs = Mybagofdiscs::where("user_id", "=", $uid)->with('user', 'discs', 'Mybag')->get();
        foreach($discs as $disc){

            $disc->disc = Disc::where("id", "=", $disc->discs_id)->get();
            $disc->brand = Brand::where("id", "=", $disc->disc[0]->brand_id)->get();
            $disc->plastic = Plastic::where("id", "=", $disc->disc[0]->plastic_id)->get();
        }

        return $discs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mybagofdiscs  $mybagofdiscs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mybagofdiscs $mybagofdiscs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mybagofdiscs  $mybagofdiscs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mybagofdiscs $mybagofdiscs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mybagofdiscs  $mybagofdiscs
     * @return \Illuminate\Http\Response
     */
    public function delete($disc_id)
    {
        $deletedItem = Mybagofdiscs::where('discs_id', $disc_id)->delete();
        $response = [
            "data" => "Item " . $disc_id . " has been deleted",
        ];
        return $response;
    }
}
