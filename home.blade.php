<!doctype html>
<html lang="en">
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="pricing.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

      <title>Home Page</title>

    <style>

        a.change {
          background-color: #2e8b57;
          color: white;
          padding: 1em 1.5em;
          text-decoration: none;
          text-transform: uppercase;
        }

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
     </style>
  </head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Header Logo -->
<main role="main">
    <div class="jumbotron">
        <div class="container" style="text-align:center; margin-bottom:-70px">
            <img src="logo.png" alt="supermarket" style="width:150px; height:120px">
            <h3 class="display-3">Ravishka Mini Supermarket</h3>
        </div>  
    </div>
<br><br>
<center><a href="/report" class="change"> Reports </a></center>
<!-- Transport Management page links -->
<div class="row">
  <div class="column">
          <center><a href="/drivers" class="change"> Manage Drivers </a></center>
                 <br><br>
          <center><a href="/toregister" class="change"> Add New Vehicle </a></center>
  </div>

  <div class="column" >
          <center><a href="/wholesalelist" class="change"> Get WholeSale Buyers </a></center>
                 <br><br>
          <center><a href="/parcelindex" class="change"> Record & check  Delivery Items </a></center>
  </div>
</div>

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
  @yield('content')
</body>
</html>