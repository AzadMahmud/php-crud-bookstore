@extends('layout', ['title' => 'Edit']) @section('page-content')
<body>
    <h1 class="text-center my-4">Edit Book Details</h1>
    <div class="">
        <form>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control w-50" name="title" />
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control w-50" name="author" />
            </div>
            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control w-50" name="isbn" />
            </div>
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="text" class="form-control w-50" name="stock" />
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control w-50" name="price" />
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>
@endsection