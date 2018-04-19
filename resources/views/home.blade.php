@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            {{--<div class="card-body">--}}
            {{--@if (session('status'))--}}
            {{--<div class="alert alert-success">--}}
            {{--{{ session('status') }}--}}
            {{--</div>--}}
            {{--@endif--}}

            {{--You are logged in!--}}
            {{--</div>--}}

            @foreach($categories as $category)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ $category->name }}</div>

                        <div class="card-body">
                            @foreach($souscategories as $souscategory)
                                @if($souscategory->categorie_id == $category->id)
                                <a href="{{route('souscategories.show', ['sousCategory' => $souscategory->id])}}">{{ $souscategory->name }}</a>
                                <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
