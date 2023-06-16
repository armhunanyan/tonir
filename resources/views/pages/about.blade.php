@extends('app')

@section('content')

<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{{__('about.title')}}</h2>
            </div>
            <div class="row no-gutters">
                <div class="container">
                    <p style="font-size: 16px;line-height: 1.8;text-align: justify;">
                        {!!__('about.about')!!}
                    </p>
                </div>
            </div>
        </div>
    </div>


</section>

    
@endsection