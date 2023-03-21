<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\QueryBuilders\DrugsQueryBuilder;


class DrugController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return (\view('drugs.index'));
    }

    public function store(Request $request, DrugsQueryBuilder $drugsQueryBuilder): string
    {
        return $drugsQueryBuilder->getAll()->toJson();

    }

}
