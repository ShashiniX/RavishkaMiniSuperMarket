<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class vehicleController extends Controller
{

    function index()
    {
        return view('transport.index');
    }

    
    function add(Request $request){

        $request->validate([
            'vehicle_num'=>'required',
            'vehicle_type'=>'required',
            'lisence'=>'required',
            'reneuve'=>'required'
        ]);
    

    $query = DB::table('vehicles')->insert([
        'vehicle_num'=> $request->input('vehicle_num'),
        'vehicle_type'=> $request->input('vehicle_type'),
        'lisence'=> $request->input('lisence'),
        'reneuve'=> $request->input('reneuve')
        
    ]);

    if($query){
        return back()->with('success','Data have been successfully inserted');
    }else{
        return back()->with('fail','something went wrong');
    }
  }

    //retriev
    function show()
    {
        $data = vehicle::all();
        return view('transport.list',['vehicles'=>$data]);
    }

    //fetch all the data from data base
    function list(){
        $data=vehicle::all();
        return view('transport.edit',['vehicles'=>$data]);
    }

    //delete function
    function delete($id){
        $data=vehicle::find($id);
        $data->delete();
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        //return redirect()->back()->with('status','Student Deleted Successfully');
        //return redirect('transport.edit');
    }
/*
    function delete($id) {
        DB::delete('delete from vehicles where id = ?',[$id]);
        $data=vehicle::find($id);
        $data->delete();
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }
*/    
        function showData($id){
            $data = vehicle::find($id);
            return view('transport.update',['data'=>$data]);
        }
        //update function
        function update(Request $req){
    
            $data=vehicle::find($req->id);
            $data->vehicle_num=$req->vehicle_num;
            $data->vehicle_type=$req->vehicle_type;
            $data->lisence=$req->lisence;
            $data->reneuve=$req->reneuve;
            $data->save();
            //return redirect('edit');
    
            
            //DB::update('update members set name = ?,favoritColor=?,email=? where id = ?',[$name,$favoritColor,$email,$id]);
            echo "Record updated successfully.
            ";
            echo 'Click Here to go back.';
        }
        
}