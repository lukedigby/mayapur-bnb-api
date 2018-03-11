<?php

namespace App\Http\Controllers;

class PropertiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json([
            [
                'title' => '2 BHK', 
                'price' => '1500'
            ],
            [
                'title' => '3 BHK', 
                'price' => '4500'
            ],
            [
                'title' => '1 BHK', 
                'price' => '1000'
            ],
        ]);
    }
}
