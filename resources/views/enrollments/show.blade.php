@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollments Page</div>
  <div class="card-body">
    <h5 class="card-title">Enrollment Number : {{ $enrollments->enroll_no }}</h5>
    <p class="card-text">Batch : {{ $enrollments->batch_id }}</p>
    <p class="card-text">Student : {{ $enrollments->student_id }}</p>
    <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
    <p class="card-text">Fee : {{ $enrollments->fee }}</p>
  </div>
  <div class="card-footer">
    <a href="{{ route('enrollments.index') }}" class="btn btn-primary">Back</a>
  </div>
</div>

@endsection