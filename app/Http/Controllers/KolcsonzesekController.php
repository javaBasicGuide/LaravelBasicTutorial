<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kolcsonzesek;

class KolcsonzesekController extends Controller
{
    function getKolcsonzesek(){

        $kolcsonzesek = kolcsonzesek::all();
    
        return response()->json($kolcsonzesek, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    function getOneKolcsonzes($id){
        
        $kolcsonzes = Kolcsonzesek::with("kolcsonzok")->where("Kolcsonzes_id", $id)->first();
        
        return response()->json($kolcsonzes, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    function deleteKolcsonzes($id){
        $kolcsonzes =  kolcsonzesek::where("Kolcsonzes_id", $id)->delete();

        return response()->json($kolcsonzes, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    function addKolcsonzes(Request $request){
        $data = $request->all();

        $kolcsonzes = new Kolcsonzesek;
        $kolcsonzes->kolcsonzo_id = $data["kolcsonzo_id"];
        $kolcsonzes->iro = $data["iro"];
        $kolcsonzes->mufaj = $data["mufaj"];
        $kolcsonzes->cim = $data["cim"];
        $kolcsonzes->save();

        return response()->json("kolcsonzes hozza adva", 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    function modifyKolcsonzes(Request $request){
        $data = $request->all();

        $id = $data["kolcsonzes_id"];

        $kolcsonzes = Kolcsonzesek::where("Kolcsonzes_id", $id)->update([
            "kolcsonzo_id" => $data["kolcsonzo_id"],
            "iro" => $data["iro"],
            "cim" => $data["cim"],
            "mufaj" => $data["mufaj"]
        ]);


        return response()->json("kolcsonzes modositva", 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

}
