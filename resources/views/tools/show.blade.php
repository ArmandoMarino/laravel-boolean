@extends('layouts.main')

@section('title', $tool->title)

@section('content')
  {{-- BUTTON --}}
  <div class="d-flex justify-content-between">
    <a class="btn btn-primary px-4 m-3" href="{{ route('tools.index') }}">Back</a>
    {{-- <a class="btn btn-secondary px-4 m-3" href="{{ route('tools.edit', $comic->id) }}">Edit Comic</a> --}}
    {{-- <form action="{{route('tools.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-3">Delete Comic</button>
    </form> --}}
  </div>
 

<section id="tool-show" class="d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
        <img class="img-fluid" src="{{ $tool->thumb }}" alt="{{ $tool->name }}">
        <h2>{{ $tool->name }}</h2>
        <p>{{$tool->description }}</p>
        <ul>
            <li>{{$tool->category }}</li>
            <li>{{$tool->release_year }}</li>
            <li>{{$tool->latest_version }}</li>
            <li>{{$tool->download_link }}</li>
            <li>{{$tool->supported_os }}</li>
            <li>{{$tool->vote }}</li>
        </ul>
    </div>
</section>

@endsection
