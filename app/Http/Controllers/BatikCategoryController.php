<?php

namespace App\Http\Controllers;

use App\Models\BatikCategory;

class BatikCategoryController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $batik_categories = BatikCategory::all();
        return response()->json($batik_categories);
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
        $batik_category = BatikCategory::find($id);
        return response()->json($batik_category);
    }
}
