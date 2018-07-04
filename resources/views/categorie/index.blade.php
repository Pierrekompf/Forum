@extends('layouts.app')

@section('content')
    <a href="{{route('categories.create')}}">Créer une nouvelle catégorie</a>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{route('categories.show', ['category' => $category->id])}}">{{$category->name}}</a><br>
                <a href="{{route('categories.edit', ['category' => $category->id])}}">edit</a><br>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn-danger">Delete</button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>
@endsection