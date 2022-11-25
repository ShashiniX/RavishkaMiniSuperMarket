@extends('parcel.parcelIndex')
@section('content')
<html>
  <head>
    <style>
        a.change {
            background-color: #2e8b57;
            color: white;
            padding: 1em 1.5em;
            text-decoration: none;
            text-transform: uppercase;
        }   
        
   table, th, td {
    border:solid black;
   }

    </style>
  </head>

<table border="1" style="width:70%">

<table class="table table-success table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Sender Name</th>
      <th scope="col">Receiver Name</th>
      <th colspan="2">Status</th>
      <center><th colspan="2">Action</th></center>
    </tr>
  </thead>


  <tbody>
  @foreach ($parcels as $item)
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['name']}}</td>
      <td>{{$item['rname']}}</td>
      <td colspan="2">{{$item['status']}}</td>
      <td><a href={{"pdelete/".$item['id']}}>Delete </a></td>
      <td><a href={{"parcelEdit/".$item['id']}}>Edit </a></td>
    </tr>
    @endforeach
  </tbody>
 
</table>

<br><br><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<center>
  <button type="button" class="btn btn-success" ><b>HOME</b></button>&nbsp &nbsp &nbsp
  <button type="button" class="btn btn-success" ><b>LIST</b></button>

  
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

  @stop