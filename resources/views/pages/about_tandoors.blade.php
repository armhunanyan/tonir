@extends('app')

@section('content')

<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{{__('about_tandoors.title')}}</h2>
            </div>
            <div class="row no-gutters">
                <div class="container">

                    <p style="font-size: 16px;
                    line-height: 1.8;
                    text-align: justify;">{{__('about_tandoors.desc1')}}
                    </p>
                    <br><br>
                    <h3><b>{{__('about_tandoors.desc2')}}</b></h3>
                    <p style="font-size: 16px;
                    line-height: 1.8;
                    text-align: justify;">
{{__('about_tandoors.desc3')}}
                    </p>

                    <br><br><br>

                    <p style="font-size: 16px;
                    line-height: 1.8;
                    text-align: justify;">
                        {{__('about_tandoors.desc4')}}</p>
                  
                </div>
            </div>
        </div>
    </div>


</section>

    
@endsection