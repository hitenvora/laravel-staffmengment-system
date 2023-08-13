@extends('admin.layout')
@section('title_name')
::dashboard
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Faculty</h1>
<p class="mb-4">Manage All Faculty<a target="_blank"
        href="https://datatables.net">here</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage faculty</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
           @if(Session('del'))
           <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
            <strong>Hey!</strong>{{session('del')}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           @endif

           
         @if(Session("success"))
         <div class="alert alert-success">
         <span class="text-dark">{{session("success")}}</span>
         </div>
         @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>College</th>
                        <th>Subject</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><img src='{{ asset("uploads/faculty/".$row->photo)}}' style="width:85px; height:85px" /></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->departmentname}}</td>
                        <td>{{$row->collegname}}</td>
                        <td>{{$row->subject}}</td>
                        <td>{{$row->age}}</td>
                        <td>{{$row->mobile}}</td>
                        <td>{{$row->address}}</td>
                        
                        <td><a href="https://api.whatsapp.com/send?phone=+91{{$row->mobile}}&text=Hello%20this%20is%20an%20admin%20will%20resolved%20your%20query%20in%20sort%20moment%20please%20wait%2024%20hrs" class="text-dark btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a> | 
                    
                        <a href='{{url("admin-login/managefaculty/".$row->id)}}' class="text-white btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    
                        | 

                        <a href='{{url("admin-login/editfaculty/".$row->id)}}' class="text-white btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    
                    
                    
                    </td>
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