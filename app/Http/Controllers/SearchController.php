<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Response;
use DB;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $data = trim($request->valor);

        $result = DB::table('clients')
        ->where('nombreClie','like','%'.$data.'%')
        ->orwhere('paternoClie','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            "estado"=>1,
            "result" => $result
        ]);

    }
}