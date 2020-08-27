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
        return view('altar.demo.dashboard');
    }

    public function about()
    {
    	return view('altar.demo.about');
    }

    public function table()
    {
        return view('altar.demo.table');
    }

    public function login()
    {
         return view('altar.demo.login');
    }


    public function error404()
    {
        return abort(404);
    }

    public function error500()
    {
        return abort(500);
    }



    public function form()
    {
    	return view('altar.demo.form');
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

    

    public function destroy($id)
    {
    	return 'Deleted';
    }
}
