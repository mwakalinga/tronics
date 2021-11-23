@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h5 class="mb-0 text-center">Meters Line</h5>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($meters as $meter)
                        <li>
                            <a href="{{route('meter.edit',$meter->id)}}"><p>{{$meter->id}} = Unit {{$meter->unit}}</p></a>
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
