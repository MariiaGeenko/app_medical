<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function Auth(string $login, string $password, int $role) 
    {   
        switch($role) {
            case 1: 
                $doctorInfo='';
                return \response()->json($doctorInfo);
            case 2: 
                $patientInfo='';
                return \response()->json($patientInfo);
            default: 
                $pharmacistInfo='';
                return \response()->json($pharmacistInfo);
        }
      //  $doctors = DB::table('doctors')
        //    ->leftjoin('specialities', 'specialities.id', '=', 'doctors.speciality_id')
         //   ->select('doctors.*', 'specialities.name as caption', 'specialities.description')
         //   ->get();

            
        
    }
}
