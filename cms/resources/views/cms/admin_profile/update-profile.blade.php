@extends('cms.layouts.masterpage')
@section('title', 'users')
@section('top-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
.error{
    color: red;
}     
.field-icon {
    float: right;
    margin-right: 10px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
    color: black;
}
</style>   
@endsection
@section('header')
    @parent
@endsection
@section('leftside')
    @parent
@endsection
@section('content')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="overlay">
    </div>
    <div class="cs-overlay">
    </div>
    <div class="search-overlay">
    </div>
    <!--  BEGIN CONTENT AREA  -->   
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item">Admin Profile</li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
                
                        
                <form action="{{ route('profileUpdate') }}" method="POST">
                    @if(Session::has('order_book'))
                                                  <div class="alert alert-success" role="alert">
                                                    {{ Session::get('order_book') }}
                                                  </div>                                
                                                @endif
                    @csrf
                        <input type="number" name="id" value="{{ Auth::user()->id }}" hidden>
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">Admin Profile / Update</h5>
                            </div>

                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> 
                                <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>    
                                &nbsp; | &nbsp; Update</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}"
                                    class="form-control" placeholder="Enter Name..." required>
                                @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ Auth::user()->email }}"
                                    class="form-control" placeholder="Enter Email..." required disabled="">
                                @if ($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" id="password-field" placeholder="Password" value="{{ old('password') }}" {{ old('password') ? 'required' : '' }}>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

 
                                @if ($errors->has('password'))
                                    <div class="error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('bottom-mid-scripts')
    <script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
@endsection
@section('bottom-bot-scripts')
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });

    </script>
    <script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>  
@endsection
