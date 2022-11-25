<!doctype html>
<html lang="en">
  <head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style>
              .p1 {
              font-family: "Times New Roman", Times, serif;
      }

      .button {
  background-color:#0063B2FF; 
  border: none;
  color: white;
  padding: 5px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
 </head>
<body>

<main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3"><center>Ravishka Mini Supermarket</center></h1>
        </div>
      </div> 
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
         <center>   
    <p1 class="p1"> <h4> Update Status </h4> </p>

    <form method="post" action="/parcelEdit" >
@csrf

       <input type="hidden" name="id" value="{{$data['id']}}">
        <label for="status">Select a status:</label>
           <select name="status" id="status">
               <option value="Delivered">Delivered</option>
               <option value="Pending">Pending</option>
               <option value="Cancelled">Cancelled</option>
        </select>

    <!-- <input type= "text" name="status" value="{{$data['status']}}"> <br><br> -->
    <button type="submit" class="button">Update</button>
</form>
</body>
</html>
