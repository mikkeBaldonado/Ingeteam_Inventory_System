<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Equipments;
use App\User;

use App\Users_log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class UsersLogController extends Controller
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
    public function getData()
    {
        
    }

    public function store($data, $action){
        $task = User::findOrFail($data);
        
        $log = new Users_log;
        $log->name = $task['name'];
        $log->email = $task['email'];
        $log->action = $action;
        $log->save();

        return redirect()->route('users_log');
    }
    public function index()
    {
        if(Auth::user()->role === 'Admin'){
            $data['data'] = DB::table('users_log')->orderBy('id', 'desc')->get();

            if(count($data) > 0)
            {
                return view('Functional.users_log', $data);
            }
            
        }
        return back();
    }
}
