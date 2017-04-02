<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialite;
use App\Http\Requests\SpecialiteRequest;

class SpecialiteController extends Controller
{
	public function create()
    {
		return view('specialite');
	}

	public function store(SpecialiteRequest $request, Specialite $specialite)
	{
		$specialite->specialite = $request->specialite;
		$specialite->save();

		return view('specialite_ok');
	}

}
