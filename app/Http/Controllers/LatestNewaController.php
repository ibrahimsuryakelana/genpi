<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LatestNewaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.jsonstorage.net/v1/json/41624f5e-2d72-45c7-a6a0-726abc282fbc');
        // dd($response["items"]);
        $res = $response["items"];

        return view('latestNews/index', compact('res'));
    }
}
