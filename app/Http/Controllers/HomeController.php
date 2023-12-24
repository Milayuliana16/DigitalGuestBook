<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Mahasiswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $data['title']= 'Dashboard User';
        $data['posts'] = $mahasiswas;
        // return view('mahasiswa.index',$data);
        return view('home',$data);
    }
}
