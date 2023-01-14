<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <head>
        <style>
            fieldset {
            background-color: #eeeeee;
            display: block;
            margin-left: 2px;
            margin-right: 2px;
            padding-top: 0.35em;
            padding-bottom: 0.625em;
            padding-left: 0.55em;
            padding-right: 0.55em;
            border: 2px groove (internal value);
        }
        a.change {
            background-color: #2e8b57;
            color: white;
            padding: 1em 1.5em;
            text-decoration: none;
            text-transform: uppercase;
        } 
        </style>
    </head>
    <title>laravel</title>
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
    
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top:50">
                <a href="/list" class="change" > View </a> &nbsp
                <a href="/edit" class="change" > Update </a> &nbsp
                <a href="/edit"     class="change" > Delete </a>
                <br>
                <br>
                
                <h4>Add New Vehicle</h4>
                   <br>
                @if(Session::get('success'))
                 <div class="alert alert-danger">
                     {{Session::get('success')}}
                 </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-success">
                     {{Session::get('fail')}}
                 </div>
                @endif

                <form action="add" method="post">
                <fieldset>
                @csrf
                        <div class="form-group">
                            <label for="">Vehicle Number</label>
                            <input type="text" class="form-control" name="vehicle_num" placeholder="Enter Vehicle Number" value="{{old('vehicle_num')}}">
                            <span style="color:red">@error('vehicle_num'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Vehicle Type</label>
                            <input type="text" class="form-control" name="vehicle_type" placeholder="Enter Vehicle Type" pattern="[a-zA-Z][a-zA-Z ]{2,}" value="{{old('vehicle_type')}}">
                            <span style="color:red">@error('vehicle_type'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">License ID</label>
                            <input type="number" class="form-control" name="lisence" placeholder="Enter license ID" value="{{old('lisence')}}">
                            <span style="color:red">@error('lisence'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Reneuve License Details</label>
                            <input type="text" class="form-control" name="reneuve" placeholder="Enter reneuve" value="{{old('reneuve')}}">
                            <span style="color:red">@error('reneuve'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                        
                        </fieldset>
                    </form> 
                    
                    <script>
                        function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      alert('Your name have accepted : you can try another');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
                    </script>
                </div>
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
    </body>
</html>