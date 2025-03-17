<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; 
class TestController extends Controller
{
    public function testAction(){
        return "Funguje to?";
    }
    public function viewForm(){
        return view('form');
    }
    public function submitForm(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');

        if ($age<18){
            return response()->json([
                'status'=> Response::HTTP_FORBIDDEN,
                'message'=> "Nemoze sa pripoit, menej 18 rokov",
                
            ]);
        } else {
            return response()->json([
                'status'=> Response::HTTP_OK,
                'message'=> "$name, s emailom $email bol pridany",
                
            ]);
        }
    }
}
