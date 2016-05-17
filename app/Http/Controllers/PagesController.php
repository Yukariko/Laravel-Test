<?php

namespace App\Http\Controllers;

use Redis;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  function index()
	{
		$counter = Redis::incr('counter');

		return view('pages.index', ['counter' => $counter]);
	}
	function about()
	{
		$name = "Kangmin Lee";
		return view('pages.about', compact('name'));
	}
}
