@extends('parcel.parcelIndex')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
    background-color: white;
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
<body>
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
<h2>New Parcel</h2>
<center>
<a class="change" href="/parcelList" > View </a> &nbsp
<a class="change" href="/parcelEdit" > Update/Delete</a> &nbsp
<a class="change" href="/inner-join" > Check Delivery Item </a> &nbsp
</center>
<br>
<div class="row">
  <div class="column" style="background-color:#f0fff0;">

  <form action="newParcel" method="post">

                @csrf
                        <div class="form-group">
                            <label for=""><b>Sender Name</b></label>
                            <input type="text" class="form-control" name="name"  value="{{old('name')}}" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
                            <span style="color:red"  id="nameErrMsg">@error('name'){{$message}}@enderror  </span>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Sender Address</b></label>
                            <input type="text" class="form-control" name="address"  value="{{old('address')}}">
                            <span style="color:red">@error('address'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Sender Contact Number</b></label>
                            <input type="number" class="form-control" name="number"  value="{{old('number')}}">
                            <span style="color:red">@error('number'){{$message}}@enderror</span>
                        </div>
  </div>

  
  <div class="column" style="background-color:#f0fff0;">

  <div class="form-group">
                            <label for=""><b>Recipient Name<b></label>
                            <input type="text" class="form-control" name="rname"  value="{{old('rname')}}">
                            <span style="color:red">@error('rname'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Recipient Address</b></label>
                            <input type="text" class="form-control" name="raddress"  value="{{old('raddress')}}">
                            <span style="color:red">@error('raddress'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Recipient Contact Number</b></label>
                            <input type="text" class="form-control" name="rcontact"  value="{{old('rcontact')}}">
                            <span style="color:red">@error('rcontact'){{$message}}@enderror</span>
                        </div>
  </div>
</div>
    <fieldset>
                            <h4>Delivery infromation</h4>
                            <br>
                            <label for="">Weight</label>
                            <input type="text"  name="weight" placeholder="Enter Weight" value="{{old('weight')}}">
                            <span style="color:red">@error('weight'){{$message}}@enderror</span>
                        
                    &nbsp &nbsp &nbsp
                        
                            <label for="">Height</label>
                            <input type="text"  name="height" placeholder="Enter Height" value="{{old('height')}}">
                            <span style="color:red">@error('email'){{$heigth}}@enderror</span>
                    &nbsp &nbsp &nbsp

                            <label for="">Length</label> &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input type="text" name="length" placeholder="Enter Length" value="{{old('length')}}">
                            <span style="color:red">@error('length'){{$message}}@enderror</span>
                   

                    &nbsp &nbsp &nbsp
                            <label for="">width</label>
                            <input type="text" name="width" placeholder="Enter Width" value="{{old('width')}}">
                            <span style="color:red">@error('width'){{$message}}@enderror</span>
                      <br>
                          
                       
                            <label for="">price</label>  &nbsp &nbsp
                            <input type="text"  name="price" placeholder=" price" value="{{old('price')}}">
                            <span style="color:red">@error('price'){{$message}}@enderror</span>
                       
                            &nbsp &nbsp &nbsp
                            <label for="">Status</label>&nbsp
                            <input type="text"  name="status" placeholder="Enter Delivery Status" value="{{old('status')}}">
                            <span style="color:red">@error('status'){{$message}}@enderror</span>
                        
                            &nbsp &nbsp &nbsp
                        
                            <label for="">Driver ID &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                            <input type="text"  name="vehicle_type" placeholder="Enter Driver ID" value="{{old('vehicle_Type')}}">
                            <span style="color:red">@error('vehicle_type'){{$message}}@enderror</span>
                        
<br><br>
                            <center> <button class="button" type="submit">SAVE</button> </center>

                    </form>  
        </div>     
</fieldset>
<a href="https://www.google.com/maps/@50.501045,4.476674,7z" ><img src="map.PNG" width="400px" height="160px" align="left"></a>
<script>
  function multiplyBy()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        document.getElementById("result").innerHTML = num1 * num2;
}

function divideBy() 
{ 
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
document.getElementById("result").innerHTML = num1 / num2;
}
</script>
<form>
  <center>
Total(km) :&nbsp &nbsp &nbsp <input type="text" id="firstNumber" /><br>
1km-rs.50.00: <input type="text" id="secondNumber" /><br>
<input type="button" onClick="multiplyBy()" Value="Calculate" />
<input type="button" onClick="divideBy()" Value="Divide" />
</form>
<p>Total Amount : <br>
<span id = "result"></span>
</p>
</center>
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