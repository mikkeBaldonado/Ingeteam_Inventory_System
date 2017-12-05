<?php

namespace App\Http\Controllers;

use Auth;
use App\Equipments;
use App\User;
use App\borrowed;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class BorrowsController extends Controller
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
            return view('Functional.borrows');
        }
        return back();
    }

    public function getData()
    {
        if(Auth::user()->role == 'Admin'){
            $data['data'] = DB::table('borrowed') -> get();

            if(count($data) > 0)
            {
                return view('Functional.borrows', $data);
            }
            else
            {
                $equipment = Auth::Equipments();
                return view('Functional.borrows')->with(['borrowed' => $borrowed]);
            }
        }
        return back();
    }

    /*protected function store($id, $user, Request $request)
    {
        $task = Equipments::findOrFail($id);
        $task2 = User::findOrFail($user);
        $input = Auth::borrowed();
        /*$art = new borrowed;
        $art->name = $name;
        $art->email = $email;
        $art->parts = $parts;
        $art->condition = $condition;
        $art->save();
        
        $this->validate($request, [
            'name' =>  Auth::User($user)->name,
            'email'  => Auth::User($user)->email,
            'parts' =>  Auth::Equipments($id)->parts,
            'condition' =>  Auth::Equipments($id)->condition,
        ]);

        $input->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'parts' => $request['parts'],
            'condition' => $request['condition'],
        ]);
        return redirect()->route('Equipments');
        
    }*/
    public function edit($id)
    {
        $task = borrowed::findOrFail($id);

        return view('CRUD.BorrowUpdate', compact('borrowed','id'))->withTask($task);
    }

    public function update($id, Request $request)
    {
        $borrow = borrowed::findOrFail($id);
        $task = Equipments::findOrFail($borrow->equipments_id);

        if(Auth::User()->role === "Admin"){
            $this->validate($request, [
                'parts'  => 'required',
                'condition' => 'required|string|min:4',
            ]);
            
            $task->update([
                'parts' => $request['parts'],
                'condition' => $request['condition'],
            ]);

            $borrow->updated_at = $task['updated_at'];
            $borrow->save();

            return redirect()->route('Borrows');
        }
    }
    public function dataToStore($id)
    {
        $task = Equipments::findOrFail($id);

        return view('CRUD.BorrowForm', compact('Equipments','id'))->withTask($task);
    }
    public function store($id, Request $request){
        $task = Equipments::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email'  => 'required|string|max:255',
            'equipments_id' => 'required|string',
            'parts' => 'required|string|max:255',
            'condition' => 'required|string|min:4',
        ]);

        $input = $request->all();

        borrowed::create($input);

        return redirect()->route('Equipments');
    }
}
