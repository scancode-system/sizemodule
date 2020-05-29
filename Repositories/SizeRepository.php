<?php

namespace Modules\Size\Repositories;


use Modules\Size\Entities\Size;


class SizeRepository
{

	// create
	public static function store($data)
	{
		return Size::create($data);
	}
 

	// load
	public static function load()
	{
		return Size::all();
	}


	public static function loadBySize($size)
	{
		return Size::where('size', $size)->first();
	}

}
