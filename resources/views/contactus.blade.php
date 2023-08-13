@extends('layout')
@section('title_name')
::Contact us
@endsection
@section('content')

<section id="content">
        <div class="container mt-5">
        <h2 align="center" class="featured-hr"><span>Contact with Us</span></h2>        
        
        <div class="row">
            <div class="col-md-5 p-5  text-dark">
                <h6>Contact Us on Address</h6>
                <hr class="border border-1 w-50 border-white">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6768121719374!2d70.77229007412227!3d22.290229143262646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1687162175859!5m2!1sen!2sin" width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <div class="col-md-7 p-5">
                <h6>Contact Form </h6>
                <hr class="border border-1 w-50 border-dark">

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
                <div class="input-group mt-2">
                        <input type="text" name="name" placeholder="Name *" class="form-control">
                    </div>

                    <div class="row">

                    <div class="form-group col-md-6 mt-2">
                        <input type="text" name="firstname" placeholder="FirstName *" class="form-control">
                    </div>
                    
                    <div class="form-group mt-2 col-md-6">
                        <input type="text" name="lastname" placeholder="LastName *"  class="form-control">
                    </div>
                </div>
                    
                    <div class="input-group mt-2">
                        <input type="text" name="email" placeholder="Email *"  class="form-control">
                    </div>
                    
                    <div class="input-group mt-2">
                        <input type="text" name="mobile" placeholder="Mobile *"  class="form-control">
                    </div>
        
        
                      
        
                    <div class="input-group mt-2">
                        <textarea name="message" placeholder="Message *"  class="form-control"></textarea>
                    </div>
               
        
                    <div class="input-group mt-2">
                        <input type="submit" name="send" value="Send"  class="btn btn-dark text-white w-25">
                   
                        <input type="reset" name="reset" value="Clear"  class="btn btn-danger text-white w-25 ms-2">
                   
                    </div>
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

@endsection