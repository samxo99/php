<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giorgi extends Controller
{
    public function file() {
        return view('tengo');
    }

    public function calculate(Request $request) {


        if ($request->nsh == "mimateba"){
            return $request->erti + $request->ori;
        }

        elseif ($request->nsh == "gamokleba"){
            return $request->erti - $request->ori;
        }
        elseif ($request->nsh == "gamravleba"){
            return $request->erti * $request->ori;
        }
        elseif ($request->nsh == "gayofa"){
            if ($request->ori == 0){
                return "ნულზე გაყოფა არ მოსულა";
            }
            else {
                return $request->erti / $request->ori;
            }

        }

        else {
            return "მგელთა მგელი ვარ";
        }




    }

}
