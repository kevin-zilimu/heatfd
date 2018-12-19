<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;
class adminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('Role_Id','asc')->paginate(10);
        return view('adminPanel.index')->with('users',$users);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:8',
            'Phone_Number'=>'required',
            'Wechat_Id'=>'required|unique:users',
            'Role_Id'=>'required',
            'Location'=>'required'
        ]);
      $user = new User;
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->Phone_Number = $request->input('Phone_Number');
      $user->Wechat_Id = $request->input('Wechat_Id');
      $user->Role_Id = $request->input('Role_Id');
      $user->Location = $request->input('Location');
      $user->save();
      
      //Session::flash('message',$user['name'].'Added Successfully');
      return redirect('/adminPanel')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('adminPanel.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Phone_Number'=>'required',
            'Wechat_Id'=>'required',
            'Role_Id'=>'required',
            'Location'=>'required'
        ]);

    $user = User::find($id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->Phone_Number = $request->input('Phone_Number');
      $user->Wechat_Id = $request->input('Wechat_Id');
      $user->Role_Id = $request->input('Role_Id');
      $user->Location = $request->input('Location');
      $user->save();

      return redirect('/adminPanel')->with('success','User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/adminPanel')->with('success','User Removed');
    }
    
}
