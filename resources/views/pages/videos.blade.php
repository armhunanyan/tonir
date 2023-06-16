@extends('app')

@section('content')

<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{{__('video.title')}}</h2>
            </div>
        </div>
    </div>


</section>

<section>

    <div class="container">
        <div class="row">

            @foreach ($videos as $video)

            <div class="video-container">
                <div class="video"><iframe width="560" height="315" src="{{$video->src}}" frameborder="0" allowfullscreen=""></iframe></div>
            </div>
                
            @endforeach
            

        </div>
    </div>
    
</section>
    
@endsection