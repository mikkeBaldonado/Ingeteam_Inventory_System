<?php

namespace App\Http\Controllers;
use App\Archive_users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class ArchiveUsersController extends Controller
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
        if(Auth::user()->role == 'Admin'){
            $data['data'] = DB::table('archive_equipments') -> get();
            $data2['data'] = DB::table('archive_users') -> get();

            if(count($data) > 0 || count($data2) > 0 )
            {
                return view('Functional.Archive_users')
                ->with('equipments', DB::table('archive_equipments') -> get())
                ->with('users', DB::table('archive_users') -> get()); 
            }
        }
        return back();
    }
}
