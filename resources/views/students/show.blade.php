@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Student info</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $students->name }}</h5>
        <p class="card-text">Address: {{ $students->address }}</p>
        <p class="card-text">Mobile: {{ $students->mobile }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

@endsection