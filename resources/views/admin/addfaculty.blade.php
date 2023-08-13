@extends('admin.layout')
@section('title_name')
::dashboard
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Faculty here</h1>
<p class="mb-4">Add faculty<a target="_blank"
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
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
         <input type="file" name="photo" placeholder="Enter faculty photo *" class="form-control">
        </div>    
        
        <div class="form-group">
         <input type="text" name="name" placeholder="Enter faculty name *" class="form-control">
        </div>    
        <div class="form-group">
            <select name="departmentname" placeholder="department *" class="form-control">
                   <option value="">-select department-</option>
                   @foreach($depnm as $depnm1)
                   <option value="{{$depnm1->id}}">{{$depnm1->departmentname}}</option>
                   @endforeach
                  
            </select>
        </div>    

        <div class="form-group">
            <select name="collegename" placeholder="collegename *" class="form-control">
                   <option value="">-select collegename-</option>
                   @foreach($collegname as $collegname1)
                   <option value="{{$collegname1->id}}">{{$collegname1->collegname}}</option>
                   @endforeach
            </select>
        </div>    
       
        <div class="form-group">
            <input type="text" name="subject" placeholder="Faculty Subject *" class="form-control">
        </div>    

        <div class="form-group">
            <input type="text" name="mobile" placeholder="Mobile *" class="form-control">
        </div>    

        <div class="form-group">
            <input type="text" name="age" placeholder="Faculty age *" class="form-control">
        </div>    

        <div class="form-group">
            <textarea type="text" name="address" placeholder="Faculty Address *" class="form-control"></textarea>
        </div>    


        <div class="form-group">
            <input type="submit" name="addfaculty" value="ADDfACULTY" class="btn btn-lg btn-primary">
        </div>    
    </form>



    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection