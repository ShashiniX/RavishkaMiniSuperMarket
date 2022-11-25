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

      <center>
    <table class="table table-striped" style="width:80%">
  <thead>
    <tr>
      <th scope="col">WholeSale Buyer ID</th>
      <th scope="col">WholeSale Buyer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($data as $item)
    <tr>
      <td>{{$item->CID}}</td>
      <td>{{$item->CName}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->CAddress}}</td>
    </tr>
  @endforeach  
  </tbody>
  </table>

  
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