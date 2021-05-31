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

        $newResponse = [];

        foreach($batiks as $i => $batik) {
            $newResponse[$i]['id'] = $batik->id;
            $newResponse[$i]['name'] = $batik->name;
            $newResponse[$i]['image'] = $batik->image;
            $newResponse[$i]['description'] = $batik->description;
            $newResponse[$i]['category']['id'] = $batik->category->id;
            $newResponse[$i]['category']['name'] = $batik->category->name;
            $newResponse[$i]['category']['description'] = $batik->category->description;
        }

        return response()->json($newResponse);
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
