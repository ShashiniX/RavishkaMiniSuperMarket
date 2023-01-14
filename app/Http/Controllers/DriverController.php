<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
use App\Models\parcel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DriverController extends Controller
{
public function index()
    {
        $driver = driver::all();
        return view('driver.Dindex', compact('driver'));
    }

    public function create()
    {
        return view('driver.Dcreate');
    }

    public function store(Request $request)
    {
        $driver = new driver;
        $driver->DName = $request->input('DName');
        $driver->vehicle_type = $request->input('vehicle_type');
        if($request->hasfile('DID'))
        {
            $file = $request->file('DID');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/drivers/', $filename);
            $driver->DID = $filename;
        }
        $driver->assign = $request->input('assign');
        $driver->save();
        return redirect()->back()->with('status','Student Image Added Successfully');
    }

    public function edit($id)
    {
        $driver = driver::find($id);
        return view('driver.Dedit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        $driver = driver::find($id);
        $driver->DName = $request->input('DName');
        $driver->vehicle_type = $request->input('vehicle_type');
        if($request->hasfile('DID'))
        {
            $destination = 'uploads/drivers/'.$driver->DID;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('DID');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/drivers/', $filename);
            $driver->DID = $filename;
        }
        $driver->assign = $request->input('assign');
        $driver->update();
        return redirect()->back()->with('driver','Student Image Updated Successfully');
    }

    public function destroy($id)
    {
        $driver = driver::find($id);
        $destination = 'uploads/drivers/'.$driver->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $driver->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
}