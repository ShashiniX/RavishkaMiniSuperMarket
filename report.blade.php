@extends('parcel.parcelIndex')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Report Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                           <div class="col-md-12">
                                <h5>Generate Report- <span class="text-primary">Drivers</span> <a href="{{ route('home')}}" class="btn btn-sm btn-secondary float-right"><i class="fa fa-plus"></i></a></h5>
                           </div> 
                        </div>
                    </div>
                        <div class="text-center pdf-btn">
                            <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Download PDF</a>
                         </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($drivers) && $drivers->count())
                                    @foreach ($drivers as $key => $driver)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $driver->DName }}</td>
                                            <td>{{ $driver->assign }}</td>
                                            <td><span class="badge badge-success">{{ $driver->created_at }}</span></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">There Are No Data Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection