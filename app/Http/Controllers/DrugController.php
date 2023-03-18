<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DrugController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return (\view('drugs.index'));
    }
}
