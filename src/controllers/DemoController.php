<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('altar.pages.dashboard');
    }

    public function about()
    {
    	return view('altar.pages.about');
    }

    public function form()
    {
    	return view('altar.pages.form');
    }

    public function store(Request $request)
    {
    	$request->validate([
				'nama'=>'required',
				'email'=>'required',
				'password'=>'required',
				'alamat'=>'required',
				'jenis_kelamin'=>'required',
			]);

		return 'Success';
    }

    public function table()
    {
    	return view('altar.pages.table');
    }

    public function destroy($id)
    {
    	return 'Deleted';
    }
}
