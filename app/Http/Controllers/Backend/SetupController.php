<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.generalsetup.index');
        $setup = Setup::where('id',1)->first();
        return view('backend.setup.create',compact('setup'));
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
        Gate::authorize('app.generalsetup.index');
        
        $request->validate([
            'company_name'      => 'required|string',
            'email'             => 'required|email',
            'phone'             => 'required|max:14|min:11',
            'logo'              => 'sometimes|mimes:jpg,jpeg,png,webp|max:2024',
            'address'           => 'required',
            'copyright_text'    => 'required'
        ]);


        $setup = Setup::findOrfail($id);
        $image = $request->file('logo');
        $slug = Str::slug($request->company_name);
        $imageName = '';

        if(isset($image)){

            //make unique name for image`
            $imageName = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //storage create
            if(!Storage::disk('public')->exists('logo')){

                Storage::disk('public')->makeDirectory('logo');
            }

            //delete old pic
            if(Storage::disk('public')->exists('logo/'.$setup->logo)){

                Storage::disk('public')->delete('logo/'.$setup->logo);
            }

            $postImage = Image::make($image)->resize(80,80)->stream();
            Storage::disk('public')->put('logo/'.$imageName,$postImage);
        }else{
            $imageName = $setup->logo;
        }


        $setup->update([
            'company_name'      => $request->company_name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'address'           => $request->address,
            'logo'              => $imageName,
            'copyright_text'    => $request->copyright_text
        ]);

        notify()->success('User Updated');
        return redirect()->route('app.setup.index');
    }
}
