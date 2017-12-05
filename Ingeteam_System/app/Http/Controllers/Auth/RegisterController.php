<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Archive_users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
    public function addUser(){
        if(Auth::User()->role === "Admin"){
                return view('CRUD.Create');    
            }
       return redirect() -> route('home');
    }

    public function register(Request $request){
        $this->validator($request->all())->validate();
        
        event(new Registered($user = $this->create($request->all())));
        
        return $this->registered($request, $user)?:redirect('users_record');
    }
    
    public function destroy($id, Request $request){
        $task = User::findOrFail($id);

        $archive = new Archive_users;
        
        $archive->id = $task['id'];
        $archive->name = $task['name'];
        $archive->username = $task['username'];
        $archive->email = $task['email'];
        $archive->role = $task['role'];
        $archive -> save();

        $task->delete();
        
        return redirect()->route('users_record');
    }

    public function edit($id)
    {
        $task = User::findOrFail($id);

        return view('CRUD.Update', compact('crud','id'))->withTask($task);
    }

    public function update($id, Request $request)
    {
        $task = User::findOrFail($id);

        if(Auth::User()->role == 'Admin'){
            $this->validate($request, [
                'name' => 'required|string|min:6',
                'username' => 'required',
                'email' => 'required',
                'role' => 'required',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $task->update([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'role' => $request['role'],
                'password' => bcrypt($request['password']),
            ]);
        }else{
            $this->validate($request, [
                'name' => 'required|string|min:6',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $task->update([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);
        }

        return redirect()->route('users_record');
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:6|max:255',
            'username'  => 'required|string|min:6|max:16|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|min:4',
            'password' => 'required|string|min:6|confirmed',
            //'security'  => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
            //'security' => bcrypt($data['security']),
        ]);
    }
}
