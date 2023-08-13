@extends('admin.layout')
@section('title_name')
::add department
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add  department here</h1>
<p class="mb-4">Add  department<a target="_blank"
        href="https://datatables.net">here</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add here</h6>
    </div>
    <div class="card-body">
         <!-- validation error message -->

         @if($errors->any())
         <div class="alert alert-danger">
         @foreach($errors->all() as $err) 
         <ul>
             <li>{{$err}}</li>
          </ul>
          @endforeach
         </div>
         @endif
         @if(Session("success"))
         <div class="alert alert-success">
         <span class="text-dark">{{session("success")}}</span>
         </div>
         @endif
    <form method="post">
        @csrf
        <div class="form-group">
         <input type="text" name="departmentname" placeholder="Enter Department name *" class="form-control">
        </div>    
    
     
        <div class="form-group">
            <input type="submit" name="adddept" value="Add Department" class="btn btn-lg btn-primary">
        </div>    
    </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection