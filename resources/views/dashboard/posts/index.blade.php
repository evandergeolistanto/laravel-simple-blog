@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <span class="text-3xl">My Posts</span>
</div>

@if (session('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
  
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped tab-lg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Header</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge badge-info badge-lg gap-2"><span data-feather="eye" class="inline-block w-4 h-4 stroke-current"></span></a>
            
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge badge-warning badge-lg gap-2"><span data-feather="edit" class="inline-block w-4 h-4 stroke-current"></span></a>
            
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge badge-error badge-lg gap-2" onclick="return confirm('Are You sure?')"><span data-feather="trash-2" class="inline-block w-4 h-4 stroke-current"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection