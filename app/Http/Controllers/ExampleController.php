<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function listNumbers()
    {
        $numbers = range(1, 20);
        return response()->json($numbers);
    }
}
