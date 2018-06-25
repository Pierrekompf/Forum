@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $category->name }} - {{ $souscategorie->name }}</div>

                    <div class="card-body">
                        <a href="">Ajouter un message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
