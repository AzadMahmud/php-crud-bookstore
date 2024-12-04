@extends('layout', ['title' => 'Edit']) @section('page-content')
<body>
    <h1 class="text-center my-4">Edit Book Details</h1>
    <div class="">
        <form method="post" action="{{route('books.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control w-50" name="title" value="{{old('title', $book->title)}}" />
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control w-50" name="author" value="{{old('author', $book->author)}}"/>
            </div>
            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control w-50" name="isbn" value="{{old('author', $book->isbn)}}"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="text" class="form-control w-50" name="stock" value="{{old('author', $book->stock)}}"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control w-50" name="price" value="{{old('author', $book->price)}}"/>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>

                <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>

</body>
@endsection