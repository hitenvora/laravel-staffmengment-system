@extends('layout')
@section('title_name')
::Home Page 
@endsection
@section('content')


<!-- banners  -->

<div id="carouselExampleCaptions" class="container mt-2 carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/student/images/banner.jpg')}}" class="d-block w-100" alt="..." style="width: 100%; height:300px;">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/student/images/banner1.webp')}}" class="d-block w-100" alt="..." style="width: 100%; height:300px;">
   
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/student/images/banner2.webp')}}" class="d-block w-100" alt="..." style="width: 100%; height:300px;">
     
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container p-5">
<div class="row">
<div class="col-md-4">
<img src="{{asset('assets/student/images/student.gif')}}" alt="students" style="width:100%">
</div>
<div class="col-md-7 ms-5">
<h4>Student attendance management systems (Laravel Crud Operations)</h4>
    <hr class="border border-1 border-danger w-25">
<p>Create student attendance management systems</p>

<h4><button type="button" class="btn btn-sm btn-dark bg-dark text-white" data-bs-toggle="modal" data-bs-target="#addstd">Add Students</button>
<button type="button" class="btn btn-sm  bg-danger float-end text-white">Export data</button>
</h4>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href="#" class="btn btn-primary btn-sm text-white"><i class="bi bi-pencil"></i></a> | <a href="#" class="btn btn-danger btn-sm text-white"><i class="bi bi-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><a href="#" class="btn btn-primary btn-sm text-white"><i class="bi bi-pencil"></i></a> | <a href="#" class="btn btn-danger btn-sm text-white"><i class="bi bi-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td><a href="#" class="btn btn-primary btn-sm text-white"><i class="bi bi-pencil"></i></a> | <a href="#" class="btn btn-danger btn-sm text-white"><i class="bi bi-trash"></i></a></td>
    </tr>
  </tbody>
</table>
           

</div>
</div>
</div>


<!-- add students modal -->
<!-- Modal -->
<div class="modal fade" id="addstd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Student</button>
      </div>
    </div>
  </div>
</div>

@endsection