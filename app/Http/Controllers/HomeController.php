<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
	public function indexuser()
	{
		return view ('index');
	}
	public function indexadmin()
	{
		return view ('homeAdmin');
	}

	public function agenda()
	{
		return view ('utama.agenda');
	}
	public function tambahadmin()
	{
		return view ('tambah');
	}
	public function ubahadmin()
	{
		return view ('ubah');
	}
}
