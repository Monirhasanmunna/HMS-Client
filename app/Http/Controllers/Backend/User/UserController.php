<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.user.index');
        $users = User::orderBy('id','DESC')->get();
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDoctorInfo($id)
    {
        return Doctor::find($id);
    }


    public function create()
    {
        Gate::authorize('app.user.create');
        $roles = Role::all();
        $users = User::all();
        $doctors = Doctor::all();
        return view('backend.user.create',compact('users','roles','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'avatar' => 'sometimes|mimes:jpg,jpeg,png,webp|max:2024',
            'role' => 'required',
            'doctor' => 'required',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password'
        ]);

        
       $role = Role::where('id',$request->role)->first();

       if($role->slug != 'super-admin'){

        $image = $request->file('avatar');
        $slug = Str::slug($request->name);
        $imageName = '';
        if(isset($image)){

            //make unique name for image`
            $imageName = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('users'))
            {
                Storage::disk('public')->makeDirectory('users');
            }

            $postImage = Image::make($image)->resize(169,169)->stream();
            Storage::disk('public')->put('users/'.$imageName,$postImage);
        }

        $doctor = Doctor::find($request->doctor);
        User::create([
            'name' => $doctor->name,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role,
            'status' => $request->filled('status'),
            'avatar' => $imageName,
        ]);

        notify()->success('User Added');
        return redirect()->route('app.user.index');

       }else{

        notify()->success('Can Not Add Super Admin');
        return redirect()->back('app.user.index');

       }

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
        Gate::authorize('app.user.edit');
        $user = User::findOrfail($id);
        $roles = Role::all();
        return view('backend.user.create',compact('user','roles'));
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
        //dd ($request);
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'sometimes|confirmed',
            'avatar' => 'sometimes|mimes:jpg,jpeg,png,webp|max:2024',
            'role' => 'required',
        ]);

        $role = Role::where('id',$request->role)->first();

       if($role->slug != 'super-admin'){
        $user = User::findOrfail($id);
        $image = $request->file('avatar');
        $slug = Str::slug($request->name);
        $imageName = '';
        if(isset($image)){

            //make unique name for image`
            $imageName = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //storage create
            if(!Storage::disk('public')->exists('users')){

                Storage::disk('public')->makeDirectory('users');
            }

            //delete old pic
            if(Storage::disk('public')->exists('users/'.$user->avatar)){

                Storage::disk('public')->delete('users/'.$user->avatar);
            }

            $postImage = Image::make($image)->resize(169,169)->stream();
            Storage::disk('public')->put('users/'.$imageName,$postImage);
        }else{
            $imageName = $user->avatar;
        }
        
        $password = '';
        if($request->password != null){
            $password =  bcrypt($request->password);
        }else{
            $password = $user->password;
        }

        if($user->role->slug != 'super-admin'){
            $user->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => $password,
            'role_id' => $request->role,
            'status' => $request->filled('status'),
            'avatar' => $imageName,
        ]);
            notify()->success('User Updated');
            return redirect()->route('app.user.index');

        }elseif(Auth::user()->role->id == $user->role->id){
            $user->update([
                'name' => $request->name,
                'email'=> $request->email,
                'password' => $password,
                'role_id' => $request->role,
                'status' => $request->filled('status'),
                'avatar' => $imageName,
            ]);
                notify()->success('User Updated');
                return redirect()->back();
        }else{
            notify()->success('Can not update Super Admin info');
            return redirect()->route('app.user.index');
        }
       }else{
            notify()->success('Can not Add Super Admin');
            return redirect()->route('app.user.index');
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        if($user->role->deletable == true){
            $user->delete();
            return response()->json('true');
        }
       
    }
}
