@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Teacher info</div>
    <div class="card-body">
      <h5 class="card-title">Name : {{ $courses->name }}</h5>
      <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
      <p class="card-text">Duration : {{ $courses->duration() }}</p>
    </div>
    <div class="card-footer">
      <a href="{{ route('courses.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

@endsection
