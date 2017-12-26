<?php

namespace App\Http\Controllers;

use Auth;
use App\Equipments;
use App\User;
use App\borrowed;
use App\Archive_equipments;
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
        if(Auth::User()->role === "Admin"){
                return view('CRUD.EquipmentCreate');    
            }
       return redirect() -> route('Functional.Equipments');
    }

    public function getData()
    {
        $data['data'] = DB::table('equipments')->orderBy('id', 'desc')->get();

        if(count($data) > 0)
        {
            return view('Functional.Equipments')
                ->with('data', DB::table('equipments')->orderBy('id', 'desc')->get())
                ->with('borrow', DB::table('borrowed')->orderBy('id', 'desc')->get()); 
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
        $archive = new Archive_equipments;

        $archive->id = $task['id'];
        $archive->sap = $task['sap'];
        $archive->parts = $task['parts'];
        $archive->units = $task['units'];
        $archive->hs_code = $task['hs_code'];
        $archive->condition = $task['condition'];
        $archive->save();
        
        $task->delete();
        
        session()->flash('message.level', 'success');
        session()->flash('message.content', 'Successfully Deleted Equipment!');
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
                'hs_code' => 'required|string|min:4',
                'condition' => 'required|string|min:4',
                'users_id' => 'required',
            ]);
            $task->update([
                'sap' => $request['sap'],
                'parts' => $request['parts'],
                'hs_code' => $request['hs_code'],
                'condition' => $request['condition'],
            ]);

            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Successfully Updated Equipment!');

        $users = User::findOrFail($request['users_id']); //dapat dili id

            $action = 'Updated equipment ' . $task->parts . ' to ' . $request['condition'];
            (new UsersLogController)->store($users['id'], $action);

            return redirect()->route('Equipments');
    }

    public function reports(){
        $data['data'] = DB::table('equipments')->orderBy('id', 'desc')->get();

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
        $this->middleware('auth'); 
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'sap' => 'required|string|max:255',
            'parts'  => 'required|string|max:255',
            'units' => 'required|int|max:255',
            'hs_code' => 'required|string|min:4|max:255',
            'condition' => 'required|string|min:4',
        ]);

        $unit = $request['units'];
        if($request['units'] > 1){
            while($request['units'] != 0){
                $temp = 1;
                $request['units'] = $temp;
                Equipments::create([
                    'sap' => $request['sap'],
                    'parts' => $request['parts'],
                    'units' => $request['units'],
                    'hs_code' => $request['hs_code'],
                    'condition' => $request['condition'],
                ]);
                $request['units'] = $unit;
                $request['units'] = $request['units'] - 1;
                $unit = $request['units'];
            }
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Successfully Added Equipment!');
        }else{
            $input = $request->all();    
            Equipments::create($input);
            
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Successfully Added User!');
        }


        return redirect()->route('Equipments');
    }
}
