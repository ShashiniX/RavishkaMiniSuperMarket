@extends('transport.layout')
@section('content')
<html>
    <head>
    <link href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        a:link, a:visited {
        background-color: #3CB371;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size:15px;
        }   

        a:hover, a:active {
        background-color: red;
        }
  
            body {
    font-family: 'Lato', sans-serif
}
body{
    background-color: #C9C0BB;
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 20px;
    margin-right: 80px
}
        </style>
    </head>
<body>
<form action="/edit" method="POST">
   @csrf; 

<div class="container">
    <div class=" text-center mt-5 ">
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form">
                            <div class="controls">
                                <div class="row">
  
                                <input type="hidden" name="id" value="{{$data['id']}}">
&nbsp &nbsp   
                                <div class="col-md-6">
                                        <div class="form-group"> <label for="form_vehicle_num"><b>Vehicle Number *</b></label>
                                        <input id="form_vehicle_num" type="text" name="vehicle_num" value="{{$data['vehicle_num']}}" class="form-control" placeholder="Please Vehicle Number *" required="required" data-error="Vehicle Number is required."> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group"> <label for="form_vehicle_type"><b>Vehicle Type *</b></label>
                                        <input id="form_vehicle_type" type="text" name="vehicle_type" value="{{$data['vehicle_type']}}" pattern="[a-zA-Z][a-zA-Z ]{2,}" class="form-control" placeholder="Please enter Vehicle Type *" required="required" data-error="vehicle Type is required."> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lisence"><b>lisence *</b></label>
                                        <input id="form_lisence" type="text" name="lisence" value="{{$data['lisence']}}" class="form-control" placeholder="Please enter lisence number *" required="required" data-error="lisence is required."> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group"> <label for="form_reneuve"><b>reneuve *</b></label>
                                        <input id="form_reneuve" type="text" name="reneuve" value="{{$data['reneuve']}}" class="form-control" placeholder="Please enter reneuve *" required="required" data-error="reneuve is required."> </div>
                                    </div>
                                </div>

                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Update"> </div>
                                </div>
                            </div>
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
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
<center> <a href="/home" > HOME </a> &nbsp
</body>
</html>
@stop