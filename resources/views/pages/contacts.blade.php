@extends('app')

@section('content')

<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{!!__('contacts.title')!!}</h2>
            </div>
        </div>
    </div>


</section>

<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-col">
                <i class="fas fa-map-marker-alt"></i>
                <span>
                    {!!__('contacts.address')!!}
                </span>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-col">
                <i class="fa fa-phone"></i>
                <span>
                    +374-98-200-240
                </span>
                <br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-col">
                <i class="fa fa-envelope"></i>
                <span>tonir_tonir@mail.ru</span>
            </div>
            </div>
        </div>
    </div>

</section>

<section style="margin-top: 30px;">

    <iframe src="https://snazzymaps.com/embed/214109" width="100%" height="600px" style="border:none;"></iframe>
</section>
    
@endsection