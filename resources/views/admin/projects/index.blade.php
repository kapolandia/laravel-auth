@extends ('layouts.admin')

@section ('content')
<div class="table-container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Slug</th>
          <th scope="col">Client Name</th>
          <th scope="col">Summary</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->summary}}</td>
                <td class="w-25">
                    <button type="button" class="btn btn-outline-primary" onclick="window.location.href='{{ route('admin.projects.show', ['project' => $project->id]) }}'"><i class="fa-solid fa-eye"></i></button>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection