<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.roles.index');
        $roles = Role::all();
        return view('backend.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.roles.create');
        $modules = Module::all();
        return view('backend.role.create',compact('modules'));
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

            'name' => 'required',
            'permission' => 'required',

        ]);

        Role::create([

            'name' => $request->name,
            'slug' => Str::slug($request->name),

        ])->permissions()->sync($request->input('permission'));

        notify()->success("Role Added");
        return redirect()->route('app.role.index');
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
        Gate::authorize('app.roles.edit');
        
        $role = Role::findOrfail($id);
        $modules = Module::all();
        return view('backend.role.create',compact('modules','role'));
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
        Gate::authorize('app.roles.edit');
        $request->validate([

            'name' => 'required',

        ]);

        $role = Role::findOrfail($id);
        if($role->slug != 'super-admin'){
            $role->update([

                'name' => $request->name,
                'slug' => Str::slug($request->name),
    
            ]);
            $role->permissions()->sync($request->input('permission'));
    
            notify()->info("Role Updated");
            return redirect()->route('app.role.index');
        }else{
            notify()->warning("Can Not Update Super Admin User Info");
            return redirect()->route('app.role.index');
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
        Gate::authorize('app.roles.destroy');

        $role = Role::findOrfail($id);
        if($role->deletable == true)
        {
            $role->delete();
            return response()->json($role);
        }else{
            notify()->error("You Can Not Delete System Role");
            return redirect()->back();
        }
    }
}
