@extends('layout', ['title'=>'Home'])

@section('page-content')


<body>
<h1 class="text-center">Bookstore</h1>
<div class="row mt-4" >
  <div class="col-lg-10">
    search
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
          <a href="{{route('books.view', $book->id)}}">View</a>
        </td>
        <td>
          <a href="{{route('books.edit', $book->id)}}">Edit</a>
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