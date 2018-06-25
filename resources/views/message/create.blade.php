@extends('layouts.app')

@section('content')
    <form action="{{ route('message.store') }}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="text">Text</label>
            <input type="text" name="text">
        </div>
        <input type="submit" name="valider" placeholder="valider">
    </form>
@endsection