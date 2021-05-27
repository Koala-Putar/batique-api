<?php

namespace App\Http\Controllers;

use App\Models\Batik;

class BatikController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $batiks = Batik::all();
        return response()->json($batiks);
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function show($id)
    {
        $batik = Batik::find($id);
        return response()->json($batik);
    }
}
