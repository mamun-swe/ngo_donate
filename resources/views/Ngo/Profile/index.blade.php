@extends('Layouts.ngo.layout')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">
        <div class="col-12 my-3">
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <img src="{{url('')}}/website/images/ngo/{{$profile->image}}" class="img-fluid" />
                    <div class="pt-3">
                        <h4 class="font-weight-bold mb-0">{{$profile->name}}</h4>
                        <p class="mb-4">{{$profile->email}}</p>
                        {!! $profile->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection