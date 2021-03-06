@extends('front.layouts.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Add Your Book!</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{route('addbook')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group floating-label-form-group controls">
                        <label>Book Name:</label>
                        <input type="text" name="name" placeholder="Book Name" class="form-control text-center">
                    </div>

                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Author:</label>
                        <input type="text" name="author" placeholder="Author Name" class="form-control text-center"
                            required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Description:</label>
                        <textarea type="text" name="description" placeholder="Description" required
                            class="form-control text-center"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls pt-2">
                        <input placeholder="Book Image" type="file" class="form-control-file text-muted" name="image"
                            required>
                    </div>
                </div>
                <div class="form-group my-4 text-center">
                    <div class="control-group">
                        <label class="text-muted">Condition of Book</label>
                        <div class="form-group floating-label-form-group controls">
                            <select class="form-control text-center" name="condition" required>
                                <option value="new">New</option>
                                <option value="like new">Like New</option>
                                <option value="old">Old</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group my-4 text-center">
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
