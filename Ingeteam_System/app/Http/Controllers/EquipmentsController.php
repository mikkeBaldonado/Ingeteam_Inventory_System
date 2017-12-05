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

class EquipmentsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    public function addEquipment(){
        if(Auth::User()->role === "admin"){
                return view('CRUD.EquipmentCreate');    
            }
       return redirect() -> route('Functional.Equipments');
    }

    public function getData()
    {
        $data['data'] = DB::table('equipments') -> get();

        if(count($data) > 0)
        {
            return view('Functional.Equipments', $data);
        }
        else
        {
            $equipment = Auth::Equipments();
            return view('Functional.Equipments')->with(['equipment' => $equipment]);
        }
    }

    public function destroy($id)
    {
        $task = Equipments::findOrFail($id);
        $archive = DB::table('archive_equipments')->insertGetId(array(
            
            'id' => $task['id'],
            'sap' => $task['sap'],
            'parts' => $task['parts'],
            'units' => $task['units'],
            'hs_code' => $task['hs_code'],
            'conditions' => $task['condition']
        ));
        
        $task->delete();

        return redirect()->route('Equipments');
    }

    public function edit($id)
    {
        $task = Equipments::findOrFail($id);

        return view('CRUD.EquipmentUpdate', compact('Equipments','id'))->withTask($task);
    }

    public function update($id, Request $request)
    {
        $task = Equipments::findOrFail($id);

            $this->validate($request, [
                'sap' => 'required|string|max:255',
                'parts'  => 'required',
                'units' => 'required',
                'hs_code' => 'required|string|min:4',
                'condition' => 'required|string|min:4',
                'users_id' => 'required',
            ]);
            $task->update([
                'sap' => $request['sap'],
                'parts' => $request['parts'],
                'units' => $request['units'],
                'hs_code' => $request['hs_code'],
                'condition' => $request['condition'],
                'users_id' => $request['users_id'],
            ]);

        $users = User::findOrFail($request['users_id']); //dapat dili id

            $action = 'Updated equipment ' . $task->parts;
            (new UsersLogController)->store($users['id'], $action);

            return redirect()->route('Equipments');
    }

    public function reports(){
        $data['data'] = DB::table('equipments') -> get();

        if(count($data) > 0)
        {
            return view('Functional.Reports', $data);
        }
        else
        {
            $equipment = Auth::Equipments();
            return view('Functional.Reports')->with(['equipment' => $equipment]);
        }
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //return view('CRUD.Create');
        return redirect() -> route('admin'); 
    }

    public function store(Request $request){
        $this->validate($request, [
            'sap' => 'required|string|max:255',
            'parts'  => 'required|string|max:255|unique:equipments',
            'units' => 'required|string|max:255|unique:equipments',
            'hs_code' => 'required|string|min:4',
            'condition' => 'required|string|min:4',
        ]);

        $input = $request->all();

        Equipments::create($input);

        return redirect()->route('Equipments');
    }
}
