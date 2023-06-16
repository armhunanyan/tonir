@section('title') 
Թոնիրներ
@endsection 
@section('action') 
{{-- <button type="submit" form="add-book" class="btn btn-primary-rgba">Հրապարակել</button> --}}
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
        
        @foreach ($products as $product)

            <div class="col-lg-3 delete-parent">
                <div class="card">

                    <img style="max-width:100%;" src="/storage/{{$product->thumb}}">

                    <p class="title">{{$product->am}}</p>

                    <div class="text-right">
                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                        <a data-id="{{$product->id}}" href="{{route('product.destroy',$product->id)}}" class="btn btn-danger-rgba delete-product"><i class="feather icon-trash"></i></a>
                    </div>

                </div>

            </div>
                
        @endforeach

        
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $("body").on("click", ".delete-product", function(e) {   
        
        e.preventDefault();

        var parent = $(this).parents('.delete-parent');

        var id = $(this).data('id');

        var url = $(this).prop('href');

            Swal.fire({
                title: 'Արդյո՞ք ցանկանում եք ջնել',
                text: "Ջնջելուց հետո այն վերականգնել չի լինի",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ջնջել',
                cancelButtonText: 'Փակել',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false
            }).then(function (result) {

                if(result.isConfirmed){

                    $.ajax({
                    url:url,
                    type:"DELETE",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    success:function(){

                        parent.hide();

                        Swal.fire(
                        'Ջնջվեց!',
                        'Հաջողությամբ ջնջվեց',
                        'success'
                        )
                    },
                    error:function(){
                        Swal.fire(
                        'Ooops!',
                        'Ինչ որ մի բան այն չէ (((',
                        'error'
                        )
                    }
                })

                }

                
                
            })
        });
</script>
@if(session()->has('success'))
<script>
    Swal.fire(
        'Հաջողությամբ պահպանվեց',
        '',
        'success'
        )
</script>
@endif

@endsection 