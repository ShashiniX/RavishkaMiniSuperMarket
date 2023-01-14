<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
   .p1 {
       font-family: "Times New Roman", Times, serif;
      }
</style>
</head>
<body>
  <!--header -->
<main role="main">
    <div class="jumbotron">
        <div class="container" style="text-align:center; margin-bottom:-70px">
            <img src="logo.png" alt="supermarket" style="width:150px; height:110px">
            <h3 class="display-3">Ravishka Mini Supermarket</h3>
        </div>  
    </div>
    <!-- End header -->
<br>
<p1 class="p1"> <h2> List Of Vehicle Details </h2></p1>
<header class="py-3 mb-4 border-bottom shadow">
<div>
        <div class="mx-auto pull-right">
            <div class="">
              <form action="/search" method="POST" role="search"> 

              {{ csrf_field() }}
                    <div class="input-group d-flex align-self-stretch">
                        <span class="input-group-btn m-1">
                            <button class="btn btn-info" type="submit" title="Search vehicle">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>

                        <input type="text" class="form-control" name="q" placeholder="Search vehicle" id="q">
                            <span class="input-group-btn m-1">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid align-items-center d-flex">
        <div class="flex-shrink-1">
           <!-- -->     

                <i class="bi bi-bootstrap fs-2 text-dark"></i>
            </a>
        </div>
        <div class="flex-grow-1 d-flex align-items-center">
</div>

<table class="table table-success table-striped">

  <thead>
    <tr>
      <th scope="ID">ID</th>
      <th scope="Vehicle Number">Vehicle Number</th>
      <th scope="Vehicle Type">Vehicle Type</th>
      <th scope="License ID">License ID</th>
      <th scope="Reneuve">Reneuve</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($vehicles as $vehicle)
    <tr>
      <td>{{$vehicle['id']}}</td>
      <td>{{$vehicle['vehicle_num']}}</td>
      <td>{{$vehicle['vehicle_type']}}</td>
      <td>{{$vehicle['lisence']}}</td>
      <td>{{$vehicle['reneuve']}}</td>
    </tr>
  @endforeach  
  </tbody>
  </table>
</div>
 <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<center>
  <button type="button" class="btn btn-success" ><b>HOME</b></button>&nbsp &nbsp &nbsp
  <button type="button" class="btn btn-success" ><b>UPDATE</b></button>

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