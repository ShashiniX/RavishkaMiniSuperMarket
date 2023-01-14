<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parcel;
use App\Models\driver;
use App\Models\vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class parcelController extends Controller
{
    function parcelindex()
    {
        
        return view('parcel.newParcel');
    
    }
    
    function newParcel(Request $request){
        // return $request-> rcontact;
        $request->validate([

            'name'=>'required|string|max:45',
            'address'=>'required|max:55|min:10',
            'number'=>'required|max:10|min:10',
            'rname'=>'required',
            'raddress' =>'required|unique:parcels|max:55|min:10',
            'rcontact' =>'required|unique:parcels|max:10|min:10',
            'weight' =>'required',
            'height' =>'required',
            'length' =>'required',
            'width'=>'required',
            'price'=>'required',
            'status'=>'required',
            'vehicle_type'=>'required',
        ]);

        
        do {
            $code = random_int(100000, 999999);
        } while (parcel::where("code", "=", $code)->first());

        $query = DB::table('parcels')->insert([
            'name'=> $request->name,
            'address'=> $request->address,
            'rname'=> $request->rname,
            'raddress'=> $request->raddress,
            'rcontact' =>$request->rcontact,
            'weight' =>$request->weight,
            'height' =>$request->height,
            'length' =>$request->length,
            'width'=>$request->width,
            'price'=>$request->price,
            'status'=>$request->status,
            'vehicle_type'=>$request->vehicle_type,
            'code'=>$code,
        ]);

        if($query){
            return back()->with('success','Data have been successfully inserted');
        }else{
            return back()->with('fail','something went wrong');
        }
 }
 function trackingmNumber(){
    Model::select('column')
    ->where('column','value')
    ->intTrackingNum()
    ->limit(2)
    ->get();
  }

  function parcelshow()
  {
      $data = parcel::all();
      return view('parcel.allParcel',['parcels'=>$data]);
  }

  function parcelList(){
      $data=parcel::all();
      return view('parcel.editParcel',['parcels'=>$data]);
  }

  function Pdelete($id){
      $data=parcel::find($id);
      $data->delete();
      echo "Record deleted successfully.
      ";
      echo 'Click Here to go back.';
      //return redirect()->back()->with('status','Student Deleted Successfully');
      //return redirect('transport.edit');
  }

/*
  function delete($id) {
      DB::delete('delete from parcels where id = ?',[$id]);
      $data=vehicle::find($id);
      $data->delete();
      echo "Record deleted successfully.
      ";
      echo 'Click Here to go back.';
      }
  */ 
      function PshowData($id){
          $data = parcel::find($id);
          return view('parcel.updateParcel',['data'=>$data]);
      }
      function updateParcel(Request $request){

          $data=parcel::find($request->id);
          $data->status=$request->get('status');
          $data->save();
          //return redirect('edit');
  
          
          //DB::update('update members set name = ?,favoritColor=?,email=? where id = ?',[$name,$favoritColor,$email,$id]);
          echo '<script>alert("Update Successfully")</script>';
          echo 'Click Here to go back.';
      }

      public function innerJoinCaluse(){
          $request = DB::table('drivers')
          ->join('parcels','drivers.id','=','parcels.vehicle_type')
          ->select('drivers.DName','parcels.rname','parcels.code')
          ->get();
        return $request;
      }

}