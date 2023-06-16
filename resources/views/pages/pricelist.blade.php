@extends('app')

@section('content')

<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{{__('pricelist.title')}}</h2>
            </div>
            <div class="row no-gutters">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Նկար</th>
      <th scope="col">Անուն</th>
      <th scope="col">Տեսակ</th>
      <th scope="col">Բարձր.</th>
      <th scope="col">Լայն.</th>
      <th scope="col">Բերան</th>
      <th scope="col">Աշխ. մաս</th>
      <th scope="col">Քաշ</th>
      <th scope="col">Ծախս</th>
      <th scope="col">Եփում է</th>
      <th scope="col">Շամփուր</th>
      <th scope="col">Գին</th>
      <th scope="col">Գինը շամփուրներով</th>
    </tr>
  </thead>
  <tbody>
      @php
      $i = 0;
      @endphp
@foreach($tonirs as $tonir)

@php
    
    $shamp = ($tonir->has2 ? $tonir->has1.'/'.$tonir->has2 : $tonir->has1);
    $type = ($tonir->type == 'e' ? 'Էլեկտրական' : 'Ցախի');
    
    $energy = ($tonir->type == 'e' ? $tonir->energy . 'Կվտ/ժ' : '-');
    $i++;
      
@endphp
    <tr>
      <th scope="row">{{$i}}</th>
      <td><img width="64" src="/storage/{{$tonir->thumb}}"></td>
      <td>{{$tonir->am}}</td>
      <td>{{$type}}</td>
      <td>{{$tonir->height}} սմ</td>
      <td>{{$tonir->width}} սմ</td>
      <td>{{$tonir->neck}} սմ</td>
      <td>{{$tonir->usingspace}} սմ</td>
      <td>{{$tonir->weight}} կգ</td>
      <td>{{$energy}}</td>
      <td>{{$tonir->ability}} կգ</td>
      <td>{{$shamp}}</td>
      <td>{{$tonir->price}} դր</td>
      <td>{{$tonir->price1}} դր</td>
    </tr>
    @endforeach

  </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

    
@endsection