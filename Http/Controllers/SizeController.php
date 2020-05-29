<?php

namespace Modules\Size\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Size\Repositories\SizeRepository;
use Modules\Size\Http\Requests\SizeRequest;

class SizeController extends Controller 
{

	public function store(SizeRequest $request)
	{
		$size = SizeRepository::store($request->all());
		return back()->with('success', 'Tamanho '.$size->size.' gerado.')->withInput();
	}

}

