<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top_speaker()
    {
        $speakers = Speaker::all();
        return response()->json($speakers, 200);
    }
}
