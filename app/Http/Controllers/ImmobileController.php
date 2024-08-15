<?php
/*

Author: Excellence Soft - by Junior Oliveira


 */
namespace SiteEspindola\Http\Controllers;

use SiteEspindola\Immobile;
use Illuminate\Http\Request;
use DB;

class ImmobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function allCoordinates()
    {
        # code...
    }
    
    public function show($id)
    {
        $immobile = Immobile::where('immobiles_code',$id)->first();
        return response()->json($immobile);
    }

    public function all()
    {
        $immobile = Immobile::all();
        return response()->json($immobile);
    }

    public function getImmobileByCode($code)
   {
	$immobile = DB::table('immobiles')
		->join('photo_immobiles', 'immobiles.immobiles_code', '=',
		 'photo_immobiles.photo_immobiles_code_immobile')
		->where('photo_immobiles.photo_immobiles_code_immobile', '=',
		$code)->get();

	return response()->json($immobile);
    }




}
