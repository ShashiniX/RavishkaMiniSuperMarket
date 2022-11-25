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

        .button {
            background-color:#3CB371; 
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        </style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Drivers
                        <a  href="{{ url('add-driver') }}" >Add Driver</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Driver Name</th>
                                <th>vehicle </th>
                                <th>Assign</th>
                                <th>Profile Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($driver as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->DName }}</td>
                                <td>Truck</td>
                                <td>{{ $item->assign }}</td>
                                <td>
                                    <img src="{{ asset('uploads/drivers/'.$item->DID) }}" width="70px" height="70px" alt="Image">
                                </td>
                                
                                <td>
                                    <a href="{{ url('edit-driver/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-driver/'.$item->id) class="button"}}" >Delete</a> --}}
                                    <form action="{{ url('delete-driver/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button">Delete</button>
                                    </form>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
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
@endsection