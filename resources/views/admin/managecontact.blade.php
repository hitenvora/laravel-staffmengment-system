@extends('admin.layout')
@section('title_name')
::dashboard
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Contacts</h1>
<p class="mb-4">Manage All contacts<a target="_blank"
        href="https://datatables.net">here</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Contacts</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
           @if(Session('del'))
           <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
            <strong>Hey!</strong>{{session('del')}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Name</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row["name"]}}</td>
                        <td>{{$row["fname"]}}</td>
                        <td>{{$row["lname"]}}</td>
                        <td>{{$row["email"]}}</td>
                        <td>{{$row["phone"]}}</td>
                        <td>{{$row["message"]}}</td>
                        
                        <td><a href="https://api.whatsapp.com/send?phone=+91{{$row['phone']}}&text=Hello%20this%20is%20an%20admin%20will%20resolved%20your%20query%20in%20sort%20moment%20please%20wait%2024%20hrs" class="text-dark btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a> | 
                        <a href='{{url("admin-login/managecontacts/".$row->id)}}' class="text-white btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection