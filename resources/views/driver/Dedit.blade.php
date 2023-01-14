<!doctype html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <style>
      * {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 40%;
  padding: 30px;
  height: 300px; /* Should be removed. Only for demonstration */
}

fieldset {
  display: block;
  margin-left: 40px;
  margin-right: 2px;
  padding-top: 100px;
  padding-bottom: 40px;
  padding-left: 40px;
  padding-right: 40px;
  border: 10px groove (internal value);
}
<style>
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
        .button {
        background-color:#3CB371; 
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        </style>

 </style>
  </head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Update Driver Details
                        <a href="{{ url('drivers') }}" class="button">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-driver/'.$driver->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Driver Name</label>
                            <input type="text" name="DName" value="{{$driver->DName}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Vehicle Type</label>
                            <input type="text" name="vehicle_type" value="{{$driver->vehicle_type}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Assign</label>
                            <input type="text" name="assign" value="{{$driver->assign}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Driver Profile Image</label>
                            <input type="file" name="DID" class="form-control">
                            <img src="{{ asset('uploads/drivers/'.$driver->DID) }}" width="70px" height="70px" alt="Image">
                        </div>
 
                        <div class="form-group mb-3">
                            <button type="submit" class="button">Update Driver</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>