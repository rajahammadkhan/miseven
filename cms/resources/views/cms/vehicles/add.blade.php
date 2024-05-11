@extends('cms.layouts.masterpage')
@section('title', 'Vehicles')
@section('top-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/forms/switches.css">
<link href="{{ url('') }}/assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('') }}/assets/css/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 <style>
.error{
    color: red;
}

.file {
  visibility: hidden;
  position: absolute;
}

.img-thumbnail{
    cursor: pointer;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}

.images {
    display: flex;
    flex-wrap: wrap;
}

.photo {
    width: 360px;
    height: 215px;
}

.photo img {
    width: 100%;
    height: 100%;
    background-color: darkgray;
}

.img-thumbnail:hover {
  box-shadow: 0 0 2px 1px #000;
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
                    <li class="breadcrumb-item">All Vehicles</li>
                    <li class="breadcrumb-item"><a href="{{route('vehicles')}}">Vehicles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$isEdit ? 'Edit' : 'Add'}}</li>
                </ol>
                
                        
                <form action="{{ $isEdit ? route('vehicle.update', [$vehicle->id]) : route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($isEdit)
                        <input type="hidden" name="id" value="{{ $vehicle->id ?? null }}">
                    @endif
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">Vehicles / {{$isEdit ? 'Edit' : 'Add'}}</h5>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{route('vehicles')}}" class="btn btn-danger"> 
                                <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>    
                                &nbsp; | &nbsp; Go Back</a>

                                <button type="submit" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> 
                                <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>    
                                &nbsp; | &nbsp; {{ $isEdit ? 'Update' : 'Save' }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                    <div class="form-row mb-4">
                            
                            <div class="col-md-3">
                                <label>Featured Image <small>( Dimension : 1920 x 874 )</small> <span class="text-danger"> *</span> </label>
                                <input {{!$isEdit ? 'required' : null}} type="file" name="featured_image"  class="file" accept="image/*" value="{{ $vehicle->featured_image ?? null }}">
                                <div class="images">
                                    <div class="photo">
                                        <img src="{{url('')}}/uploads/{{$vehicle->featured_image ?? 'placeholder-small.jpg'}}" id="preview" class="img-thumbnail browse">
                                    </div>
                                    @if ($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="form-group col-md-12" style="margin-bottom: -10px;">
                                        <label for="">Brand <span class="text-danger">*</span> </label>
                                        <select class="basic" name="brand_id" required>
                                            <option selected disabled>Please Select</option>
                                            @foreach ($brands as $brand)
                                                <option {{$isEdit && $brand->id == $vehicle->brand_id ? 'selected' : null}} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('brand->id'))
                                            <div class="error">{{ $errors->first('brand->id') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Vehicle Name <span class="text-danger"> * </span></label>
                                        <input type="text" name="name" value="{{ $vehicle->name ?? old('name') ?? null }}"
                                            class="form-control" placeholder="Enter Name..." required>
                                        @if ($errors->has('name'))
                                            <div class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Vehicle Type <span class="text-danger"> *</span></label>
                                        @if($isEdit)
                                        <select class="basic" name="car_type" required>
                                            <option selected disabled>Please Select</option>
                                                <option {{$isEdit && $vehicle->car_type == 'SUV' ? 'selected' : null}} value="SUV">SUV</option>
                                                <option {{$isEdit && $vehicle->car_type == 'Luxury' ? 'selected' : null}} value="Luxury">Luxury</option>
                                                <option {{$isEdit && $vehicle->car_type == 'Sports' ? 'selected' : null}} value="Sports">Sports</option>
                                                <option {{$isEdit && $vehicle->car_type == 'Coupe' ? 'selected' : null}} value="Coupe">Coupe</option>
                                                <option {{$isEdit && $vehicle->car_type == 'Convertible' ? 'selected' : null}} value="Convertible">Convertible</option>
                                        </select>
                                @else
                                <select class="basic" name="car_type" required>
                                            <option selected disabled>Please Select</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Luxury">Luxury</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Coupe">Coupe</option>
                                                <option value="Convertible">Convertible</option>
                                        </select>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Price <span class="text-danger"> * </span></label>
                                        <input type="text" name="price" value="{{ $vehicle->price ?? old('price') ?? null }}"
                                            class="form-control" placeholder="Enter Price..." required>
                                        @if ($errors->has('price'))
                                            <div class="error">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="rm-group col-md-11 mt10">
                                <div class="row">
                                    <div class="form-group col-md-6" style="margin-bottom: -10px;">
                                        <label for="">Model Year Vehicle <span class="text-danger">*</span> </label>
                                        <input type="text" name="model_year" value="{{ $vehicle->model_year ?? old('model_year') ?? null }}"
                                            class="form-control" placeholder="Enter Model Year Vehicle" required>
                                        @if ($errors->has('model_year'))
                                            <div class="error">{{ $errors->first('model_year') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Location <span class="text-danger"> * </span></label>
                                        <input type="text" name="location" value="{{ $vehicle->location ?? old('location') ?? null }}"
                                            class="form-control" placeholder="Enter Location" required>
                                        @if ($errors->has('location'))
                                            <div class="error">{{ $errors->first('location') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-11 mt10">    
                                <h5><b>FEATURES</b></h5>
                            </div>
                            <div class="form-group col-md-1">
                                @if($isEdit)
                                @else
                                <button type="button" class="btn btn-dark waves-effect waves-light btn-sm add_more1">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                </button>
                                @endif
                            </div>
                            
                            

                            <div class="form-group col-md-12">
                                <div class="addMore">
                                    <div class="addmore_cont">
                                        <div class="addMore_btn">
                                            @if($isEdit)
                                                @foreach($vehicle->features as $key => $feature)
                                                    <div class="row addmore_cont1 ml30">
                                                        <input type="hidden" name="featureid[]" value="{{$feature->id}}" class="radio_counter1" />
                                                        
                                                        <div class="form-group col-md-8">
                                                            
                                                            <input type="text" name="feature_name[]" value="{{$feature->name}}"
                                                                class="form-control" placeholder="Feature Name...">
                                                            @if ($errors->has('feature_name'))
                                                                <div class="error">{{ $errors->first('feature_name') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" name="feature_value[]" value="{{$feature->value}}"
                                                                class="form-control" placeholder="Feature Name...">
                                                            @if ($errors->has('feature_value'))
                                                                <div class="error">{{ $errors->first('feature_value') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-1 mt-1">
                                                            <a href="javascript:void(0);" class="remove" id="{{$feature->id}}">
                                                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="row addmore_cont1 ml30">
                                                    <input type="hidden" value="1" class="radio_counter1" />

                                                    <div class="form-group col-md-8">
                                                        <input type="text" name="feature_name[]" value=""
                                                            class="form-control" placeholder="Feature Name...">
                                                        @if ($errors->has('feature_name'))
                                                            <div class="error">{{ $errors->first('feature_name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" name="feature_value[]" value=""
                                                            class="form-control" placeholder="Value...">
                                                        @if ($errors->has('feature_value'))
                                                            <div class="error">{{ $errors->first('feature_value') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-1 mt-1">
                                                        <a href="javascript:void(0);" id="remove" class="remove">
                                                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                        </a>
                                                    </div>

                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label>Description</label>
                                <textarea cols="200" class="summernote" name="description">{!! $vehicle->description ?? null !!}</textarea>
                            </div>
                            @if($isEdit)

                            <div class="col-md-12 mt30">
                                <div class="custom-file-container" data-upload-id="galleryImages">
                                    <label>Gallery Images <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <br>
                                     @foreach($vehicle->images as $key => $feature)
                                   
                                    <div class="custom-file-container__image-multi-preview" data-upload-token="c83aznuntollow3fc9m91" style="background-image: url('{{url('')}}/uploads/{{$feature->image}}'); ">
                                        <a href="javascript:void(0)" class="imagedelete" id="{{$feature->id}}">
                                            <span class="custom-file-container__image-multi-preview__single-image-clear">
                                                <span class="custom-file-container__image-multi-preview__single-image-clear__icon" data-upload-token="c83aznuntollow3fc9m91">×</span>
                                            </span>
                                        </a>
                                    </div>
                                    @endforeach  
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" name="multi_images[]" class="custom-file-container__custom-file__custom-file-input" multiple>
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>

                            @else
                            <div class="col-md-12 mt30">
                                <div class="custom-file-container" data-upload-id="galleryImages">
                                    <label>Gallery Images <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" name="multi_images[]" class="custom-file-container__custom-file__custom-file-input" multiple>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>

                                    <div class="custom-file-container__image-preview"></div>
                                    
                                </div>
                            </div>
                            @endif
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
    <script src="{{ url('') }}/assets/js/bootstrap-tagsinput.min.js"></script>
    <script src="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="{{ url('') }}/assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('') }}/assets/js/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('') }}/assets/js/datatables/axios.min.js"></script>
@endsection
@section('bottom-bot-scripts')
    <script>
        $(document).ready(function() {
            $('form').parsley();

            $('.summernote').summernote(
                {
                    height: 300,
                }
            );

            $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
            });
            $('.file').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);
            
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
            });

            var secondUpload = new FileUploadWithPreview('galleryImages');

            var num = 1;

            $(document).on('click' , '.add_more1' , function(){
                
                $('.addMore_btn').append(
                `<div class="row addmore_cont1 ml30">
                    
                    <input type="hidden" value="1" class="radio_counter1" />
                    
                    <div class="form-group col-md-8">
                        <input type="text" name="feature_name[]" value=""
                            class="form-control" placeholder="Feature Name...">
                        @if ($errors->has('feature_name'))
                            <div class="error">{{ $errors->first('feature_name') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="feature_value[]" value=""
                            class="form-control" placeholder="Value...">
                        @if ($errors->has('feature_value'))
                            <div class="error">{{ $errors->first('feature_value') }}</div>
                        @endif
                    </div>

                    <div class="col-md-1 mt-1">
                        <a href="javascript:void(0);" id="remove" class="remove">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        </a>
                    </div>`
                );

                $('form').parsley();

                
                
            });
            $('.remove').click(function () {
                    $(this).parent().parent().remove();
                });

        $('.imagedelete').click(function () {
          var deleteId = $(this).attr('id');

          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Yes, delete it!'
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("vehicleimage.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'Image has been deleted.',
                  'success'
                )

                table.draw();
              })
              .catch(function (error) {
                console.log(error);
                swal(
                  'Failed!',
                  error.response.data.error,
                  'error'
                )
              });
            }
            location.reload(true);
          });
             

               
        });

        $('.remove').click(function () {
          var deletefeatureId = $(this).attr('id');

          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Yes, delete it!'
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("vehiclefeature.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deletefeatureId: deletefeatureId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'Feature has been deleted.',
                  'success'
                )

                table.draw();
              })
              .catch(function (error) {
                console.log(error);
                swal(
                  'Failed!',
                  error.response.data.error,
                  'error'
                )
              });
            }
          });
             

               
        });

        });

    </script>
@endsection
