@section('title') 
Ավելացնել թոնիր
@endsection 
@section('action') 
<button type="submit" form="add-book" class="btn btn-primary-rgba">Ավելացնել</button>
@endsection 
@extends('admin.layouts.main')
@section('style')
<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <form id="add-book" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    <div class="row">
        
        <!-- Start col -->
        <div class="col-lg-8 col-xl-9">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Թոնրի տվյալները</h5>
                </div>
                <div class="card-body">
                    
                        
                        @csrf

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Վերնագիրը (հայերեն)</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control font-20" name="am" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Վերնագիրը (ռուսերեն)</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control font-20" name="ru" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Վերնագիրը (անգլերեն)</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control font-20" name="en" required>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Բարձրությունը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="height" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">սմ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Լայնությունը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="width" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">սմ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Բերան</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="neck" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">սմ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Աշխատող մասը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="working_space" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">սմ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Քաշ</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="weight" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">կգ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Հոսանքի ծախս</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control font-20" name="energy" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Կվտ ժամում</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Շամփուրների քանակը</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Ունի</span>
                                        </div>
                                        <input type="number" class="form-control font-20" name="has1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">շամփուրի տեղ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Որքան միս է եփում</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Եփում է</span>
                                        </div>
                                        <input type="number" class="form-control font-20" name="ability" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">կգ միս</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Բանջարեղենի կախկալի գինը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="kahkal_price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">դրամ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Գրիլի կախկալի գինը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="gril_kahkal_price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">դրամ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Գինը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">դրամ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Գինը շամփուրներով</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="price1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">դրամ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="col-form-label">Կոմպլեկտի գինը</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control font-20" name="price3" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">դրամ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="text-right m-t-30">

                            <button type="submit" class="btn btn-primary-rgba">Ավելացնել</button>
                        </div>
                        

                </div>
            </div>

                 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Տեսակ</h5>
                </div>
                <div class="card-body">
                    <select class="form-control" name="type" required>

                        <option value="e">Էլեկտրական թոնիր</option>
                        <option value="w">Ցախի թոնիր</option>
    
                    </select>
                </div>
            </div>

            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Հիմնական նկար</h5>
                </div>
                <div class="card-body">
                    <div id="image" action="#" class="dropzone">
                        <div class="fallback">
                            <input name="thumb" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Այլ նկարներ</h5>
                </div>
                <div class="card-body">
                    <div id="gallery" action="#" class="dropzone">
                        <div class="fallback">
                            <input name="images[]" type="file" multiple="multiple">
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="image" value="">
            <input type="hidden" name="gallery" value="[]">

        </div>

        
        <!-- End col -->
    </div>
</form>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Summernote js -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- eCommerce Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-product-detail-page.js') }}"></script>
<script src="{{ asset('assets/js/plugins/switchery/switchery.min.js') }}"></script>

<script>
    // Dropzone.options.galleryUpload = {
    //     //autoProcessQueue: false,
    // };

    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("div#image", {
        url: "",
        headers:{
                'x-csrf-token': '{{csrf_token()}}',
        },
        uploadMultiple:false,
        maxFiles: 1,
        addRemoveLinks: true,
        success: function(file, response){
            file.filename = response.filename;

            $('input[name="image"]').val(response.filename);
        },
        removedfile:function(file){

            $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            },
                    type: 'DELETE',
                    url: '',
                    data: {filename: file.filename},
                    success: function (data){

                        $('input[name="image"]').val("");
                    },
                    error: function(e) {
                        console.log(e);
            }});
            var fileRef;
            return (fileRef = file.previewElement) != null ? 
            fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        });

    var myDropzone = new Dropzone("div#gallery", {
        url: "",
        headers:{
                'x-csrf-token': '{{csrf_token()}}',
        },
        uploadMultiple:false,
        addRemoveLinks: true,
        success: function(file, response){

            file.filename = response.filename;

            var arr = JSON.parse($('input[name="gallery"]').val());

            arr.push(response.filename)

            $('input[name="gallery"]').val(JSON.stringify(arr));
        },
        removedfile:function(file){

            $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            },
                    type: 'DELETE',
                    url: '',
                    data: {filename: file.filename},
                    success: function (data){

                        var arr = JSON.parse($('input[name="gallery"]').val());

                        var index = arr.indexOf(file.filename);

                        if (index > -1) {
                            arr.splice(index, 1);
                        }

                        $('input[name="gallery"]').val(JSON.stringify(arr));
                    },
                    error: function(e) {
                        console.log(e);
            }});
            var fileRef;
            return (fileRef = file.previewElement) != null ? 
            fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        });

</script>
@endsection 