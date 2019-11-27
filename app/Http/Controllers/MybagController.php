<?php

namespace App\Http\Controllers;

use App\Mybag;
use App\User;
use Illuminate\Http\Request;

class MybagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $user_id)
    {
        $usersBag = Mybag::with('mybagofdiscs')->where('user_id', $user_id)->get();

        //get the user_id
        // query the Mybag model to get the bags by user id
        return (
            $usersBag->toArray()
        );

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
        MyBag::table('users')
            ->whereExists(function($query)
            {
                $query->select(DB::raw(1))
                      ->from('orders')
                      ->whereRaw('orders.user_id = users.id');
            })
            ->get();
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
