<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\PatientResource;
use App\Models\Subjects\Doctor;
use App\Models\Subjects\Patient;
use Illuminate\Http\Request;

class PatientApiController extends Controller
{
    public function index()
    {
        $patient = Patient::all();
        return PatientResource::collection($patient);
    }
}
