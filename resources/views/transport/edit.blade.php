<!doctype html>
<html lang="en">
<header>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <style>
            .p1 {
            font-family: "Times New Roman", Times, serif;
      }
        </style>
      </header>
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
<p1 class="p1"><h4>Update/Delete Vehicle Details</h4></p1>
<br>
<table>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">License ID</th>
      <th scope="col">Reneuve</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>


  <tbody>
  @foreach ($vehicles as $item)
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['vehicle_num']}}</td>
      <td>{{$item['vehicle_type']}}</td>
      <td>{{$item['lisence']}}</td>
      <td>{{$item['reneuve']}}</td>
      <td><a href={{"delete/".$item['id']}}>Delete </a></td>
      <td><a href={{"edit/".$item['id']}}>Edit </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
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