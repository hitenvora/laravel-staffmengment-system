@extends('admin.layout')
@section('title_name')
::dashboard
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Faculty here</h1>
<p class="mb-4">Add faculty<a target="_blank"
        href="https://datatables.net">here</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit here</h6>
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

    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

        <img src="{{ asset('uploads/faculty/'.$editdata->photo)}}" alt="photo" >

         <input type="file" name="photo" placeholder="Enter faculty photo *" class="form-control">
        </div>    
        
        <div class="form-group">
            <label class="text-success">Edit Name *</label>
         <input type="text" name="name" value="{{ $editdata->name }}" placeholder="Enter faculty name *" class="form-control">
        </div>    
        
   
        <div class="form-group">
            <select name="departmentname" placeholder="department *" class="form-control">
                   <option value="">-Edit department-</option>
                   @foreach($depnm as $depnm1)
                   @if($depnm1->id==$editdata->department_id)
                   <option value="{{$editdata->department_id}}" selected='selected'>{{$editdata->departmentname}}</option>
              
                   @else 
                   <option value="{{$depnm1->id}}">
                  {{$depnm1->departmentname}}</option>
                  @endif 
                   @endforeach
                 
            </select>
        </div>    

        <div class="form-group">
            <select name="collegename" placeholder="collegename *" class="form-control">
                   <option value="">-Edit collegename-</option>
                   @foreach($collegname as $collegname1)
                   @if($collegname1->id==$editdata->college_id)
                   <option value="{{$editdata->college_id}}" selected='selected'>{{$editdata->collegname}}</option>
              
                   @else 
                   <option value="{{$collegname1->id}}">
                  {{$collegname1->collegname}}</option>
                  @endif 
                   @endforeach
            </select>
        </div>    
       
        
        <div class="form-group">
            
        <label class="text-success">Edit Subject *</label>
            <input type="text" name="subject" value="{{ $editdata->subject }}" placeholder="Subject *" class="form-control">
        </div>    
  
        <div class="form-group">
            
        <label class="text-success">Edit Phone *</label>
            <input type="text" name="mobile" value="{{ $editdata->mobile }}" placeholder="Mobile *" class="form-control">
        </div>    

        <div class="form-group">
            
        <label class="text-success">Edit Age *</label>
            <input type="text" name="age" value="{{ $editdata->age }}" placeholder="Faculty age *" class="form-control">
        </div>    

        <div class="form-group">
            
        <label class="text-success">Edit Address *</label>
            <textarea type="text" name="address" placeholder="Faculty Address *" class="form-control">{{ $editdata->address }}</textarea>
        </div>    


        <div class="form-group">
            <input type="submit" name="updatefaculty" value="UPDATE FACULTY" class="btn btn-lg btn-danger">
        </div>    
    </form>



    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection