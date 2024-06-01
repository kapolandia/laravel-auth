@extends('layouts.admin')

@section('content')
<form action="{{route('admin.projects.update' , $project->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Project Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Client Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="client_name" value="{{$project->client_name}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Summary</label>
        <textarea type="text" class="form-control" id="exampleInputPassword2" name="summary" >{{$project->summary}}</textarea>
      </div>
    <button type="submit" class="btn btn-secondary">Update</button>
</form>
@endsection