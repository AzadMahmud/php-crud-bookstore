@extends('layout', ['title'=>'Home'])

@section('page-content')


<body>
<h1 class="text-center"><a href="{{route('books.index')}}" class="text-decoration-none text-reset">BookStore</a> </h1>
<div class="row mt-4" >
  <div class="col-lg-10">
    <form method="get" action="{{route('books.index')}}">
      <div class="row g-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="Search" name="search" >
        </div>
        <div class="col">
            <button class="btn btn-success">Search</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-2">
    <p class="text-end">
      <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
    </p>
  </div>

</div>

<div class="container mt-4">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->isbn }}</td>
        <td>
          <a href="{{route('books.view', $book->id)}}" class="btn btn-info">View</a>
        </td>
        <td>
          <a href="{{route('books.edit', $book->id)}}"class="btn btn-warning">Edit</a>
        </td>
        <td>
          <form method="post" action="{{route('books.destroy')}}", onsubmit="return confirm('Are you sure buddy?')" >
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{$book->id}}" >
            <input type="submit" value="Delete" class="btn btn-danger">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{ $books->links() }}
  </div>
</div>

@endsection