<?php

namespace App\Http\Controllers;

use App\Property;

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
        return response()->json(Property::all());
    }
}
