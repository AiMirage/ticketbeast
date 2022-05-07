<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;
use Response;

class ConcertController extends Controller
{
    public function show(Request $request, Concert $concert)
    {
        return Response::json($concert->toArray());
    }
}
