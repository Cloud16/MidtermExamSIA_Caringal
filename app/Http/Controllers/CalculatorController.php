<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
   
    
        public function index(Request $request){
            $valueone = $request->input('valueone');
            $valuetwo = $request->input('valuetwo');
            $valuethree = $request->input('valuethree');
            
        
            $rectangle = $valueone * $valuetwo;
            $cuboid = $valueone * $valuetwo * $valuethree;
            $square = $valueone * $valueone;
            
            $results = array($rectangle, $cuboid, $square);
    
                
            // echo $result;
            return view('Compute',['results' => $results]);
    }
    }
    