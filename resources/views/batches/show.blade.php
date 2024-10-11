@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Batch</div>
      <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <p class="card-text">Course : {{ $batches->course->name }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p>
      </div>
    <div class="card-footer">
        <a href="{{ route('batches.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

@endsection
