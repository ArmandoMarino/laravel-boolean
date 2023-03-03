@extends('layouts.main')

@section('title', 'TOOLS')


@section('content')

@include ('includes.alert')

<section id="contents-space" class="container">
    {{-- CREATE BTN to tools.create e settatto il ComicController con il return della view --}}
    <a class="btn btn-primary m-3" href="{{ route('tools.create')}}">Add Tool</a>

    <div class="row g-4">
        @foreach ($tools as $tool)
        <div class="my-card col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
            {{-- SHOW --}}
            <a href="{{ route('tools.show', $tool->id )}}">
                <img class="img-fluid" src="{{ $tool->thumb }}" alt="{{ $tool->name }}">
            </a>
            <p>{{ $tool->name }}</p>
            {{-- EDIT --}}
            <a class="btn btn-warning m-3 w-100" href="{{ route('tools.edit', $tool->id)}}">Edit</a>
            {{-- DELETE --}}
            <form class="w-100 m-3" action="{{route('tools.destroy', $tool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100">Delete Tool</button>
            </form>
        </div>
        
        @endforeach
    </div>
</section>



@endsection


