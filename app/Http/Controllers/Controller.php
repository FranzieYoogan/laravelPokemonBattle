<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller
{
    public function getData() {

        $response = Http::get('https://pokeapi.co/api/v2/pokemon/');
        $data = json_decode($response,true);
        $data2 = $data['results'];

        return view('welcome', ['data2' => $data2]);

    }

    public function sendData(Request $request) {


        $pokemon1 = $request->input('pokemon1');
        $pokemon2 = $request->input('pokemon2');

        if($pokemon1 == "Choose a Pokemon" || $pokemon2 == "Choose a Pokemon") {


            $error = true;
    
            return view('result', ['error' => $error]);

        } else {

     
    
        
      

        $response1 = Http::get("https://pokeapi.co/api/v2/pokemon/$pokemon1");
        $response2 = Http::get("https://pokeapi.co/api/v2/pokemon/$pokemon2");

        $data1 = json_decode($response1,true);
        $data2 = json_decode($response2,true);

        $data11 = $data1['stats'][0]['base_stat'];
        $data22 = $data2['stats'][0]['base_stat'];

        $data33 = $data1['stats'][1]['base_stat'];
        $data44 = $data2['stats'][1]['base_stat'];

        $data55 = $data1['stats'][2]['base_stat'];
        $data66 = $data2['stats'][2]['base_stat'];

       

        if($data11 > $data22 && $data33 > $data44 || $data33 > $data44 && $data55 > $data66 || $data55 > $data66 &&
$data11 > $data22  || $data55 > $data66 && $data33 > $data44) {

    $win = "WON";
    $sprite1 = $data1['sprites']['front_default'];
} else {

    $win = "Opponent Won";
    $sprite1 = $data2['sprites']['front_default'];
}

        return view('result', ['data11' => $data11,'data22' => $data22, 'data33' => $data33,'data44' => $data44  , 'data55' => $data55,'data66' => $data66, 'win' => $win, 'sprite1' => $sprite1]);
   
    }


    }


}
