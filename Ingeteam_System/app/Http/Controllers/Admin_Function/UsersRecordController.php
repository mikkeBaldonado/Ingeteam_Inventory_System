<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersRecordController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Functional.users_record');
    }
    public function getData()
    {
        $data['data'] = DB::table('users') -> get();

        if(count($data) > 0)
        {
            return view('Functional.users_record', $data);
        }
        else
        {
            return view('Functional.users_record');
        }
    }
}
