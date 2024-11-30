@extends('layout', ['title' => 'View'])

@section('page-content')

<h1 class="text-center">Book Details</h1>
<div class="container mt-4">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Stock</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->stock }}</td>
        <td>{{ $book->price }}</td>
      </tr>
 
    </tbody>
  </table>
  <a class="btn btn-secondary" href="{{route('books.index')}}">Back</a>
</div>
@endsection
