@extends('layouts.main')

@section('title', 'TOOLS')


@section('content')

<section id="contents-space">
    {{-- CREATE BTN to tools.create e settatto il ComicController con il return della view --}}
    {{-- <a class="btn btn-primary m-3" href="{{ route('comics.create')}}">Add Comic</a> --}}

    <div class="row g-4 blackboard text-white">
        @foreach ($tools as $Tool)
        <div class="col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
            {{-- SHOW --}}
            <a href="{{ route('tools.show', $Tool->id )}}">
                <img class="img-fluid" src="{{ $Tool->thumb }}" alt="{{ $Tool->name }}">
            </a>
            <p>{{ $Tool->name }}</p>
            {{-- EDIT --}}
            {{-- <a class="btn btn-warning m-3" href="{{ route('tools.edit', $Tool->id)}}">Edit</a>
            <form action="{{route('tools.destroy', $Tool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Tool</button>
            </form> --}}
        </div>
        
        @endforeach
    </div>
</section>



@endsection


