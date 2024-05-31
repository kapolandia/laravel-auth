@extends('layouts.admin')

@section('content')
<div class="card">
    <h5 class="card-header">{{$project->name}}</h5>
    <div class="card-body">
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$project->slug}}</h6>
      <p class="card-text">{{$project->summary}}</p>
    </div>
</div>
@endsection