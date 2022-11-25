@extends('parcel.parcelIndex')
@section('content')

<!doctype html>
<html ang="en">
  <head>
  <style>
    table, th, td {
    border:1px solid black;
    border-collapse: collapse;
   }
   body{
    background-color: #FBFBF9;
   }
  </style>
  </head>
  <body>
  <br><br>
  <p align="center"><button type="button" class="btn btn-warning" ><b>UPDATE</b></button></p>
  <p align="center"><button type="button" class="btn btn-warning" ><b>DELETE</b></button></p>

      <center>
    <table class="table table-striped" style="width:40%">
  <thead>
    <tr>
      <th scope="col">Order Number</th>
      <th scope="col">Sender Name</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($parcels as $parcel)
    <tr>
      <td>{{$parcel['code']}}</td>
      <td>{{$parcel['name']}}</td>
      <td>{{$parcel['rname']}}</td>
      <td>{{$parcel['status']}}</td>
    </tr>
  @endforeach  
  </tbody>
  </table>
 
  <button type="button" class="btn btn-success" ><b>HOME</b></button> &nbsp &nbsp &nbsp &nbsp &nbsp
   <button type="button" class="btn btn-success" ><b>NEXT</b></button>

   
  <!-- Footer -->
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-10 col-md-5">
            <img src="logo.png" class="" alt="supermarket" style="width:80px; height:80px">
            <h4>Ravishka Mini-Supermarket</h4>
            <small class="d-block mb-3 text-muted">&copy; 2022-2023</small>
          </div>
          <div class="col-6">
            <h2>Services</h2>
            <ul class="list-unstyled text-small">
              <li style="font-size: 20px"><a class="text-muted" href="#">Order management for wholesale buyers</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Employee management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Stock management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Supplier's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Transport management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Debtor's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Financialmanagement</a></li>
            </ul>
            </div>
        </div>
      </footer>
</body>
</html>
@stop