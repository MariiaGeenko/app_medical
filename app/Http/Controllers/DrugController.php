<?php

namespace App\Http\Controllers;

use App\QueryBuilders\DrugsQueryBuilder;
use Illuminate\Http\Request;

class DrugController extends Controller
{

    public function index()
    {
        //dd($drugsQueryBuilder);
        return (\view('drugs.index'));

       // $result = $drugsQueryBuilder->getAll()->toJson();
       // return $result;
    }


}
