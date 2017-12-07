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
use  Hash;
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

        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Successfully Deleted User!');
        
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
            ]);

            $task->update([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'role' => $request['role'],
            ]);
            $task['updated_at'] = DB::raw('CURRENT_TIMESTAMP');
            $task->save();
                

                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Successfully Updated User!');
            return redirect()->route('users_record');
        }else{
            if(Hash::check($request->password, $task->password)) {
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
                $task['updated_at'] = DB::raw('CURRENT_TIMESTAMP');
                $task->save();

                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Successfully updated profile!');                

                return redirect()->route('users_record');
            } else {
                
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Profile not updated! Password not match.');
                return view('CRUD.Update');
            }
            
        }

    }

    public function reset($id)
    {
        $task = User::findOrFail($id);

        return view('CRUD.ChangePassword', compact('crud','id'))->withTask($task);
    }

    public function changePassword($id, Request $request)
    {
        $task = User::findOrFail($id);

        if(Auth::User()->role == 'Admin'){
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed',
            ]);

            $task->update([
                'password' => bcrypt($request['password']),
            ]);
            
            $task['updated_at'] = DB::raw('CURRENT_TIMESTAMP');
            $task->save();
                
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Successfully change password!');

            return redirect()->route('users_record');
        }else{
            if(Hash::check($request->password, $task->password)) {
                $this->validate($request, [
                    'password' => 'required|string|min:6',
                    'new_password' => 'required|string|min:6|confirmed',
                    
                ]);


                $task->update([
                    'password' => bcrypt($request['new_password']),
                ]);

                $task['updated_at'] = DB::raw('CURRENT_TIMESTAMP');
                $task->save();
                

                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Successfully change password!');                

                return redirect()->route('users_record');
            } else {
                
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Password not match.');
                return view('CRUD.ChangePassword');
            }
            
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
