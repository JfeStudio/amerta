@extends('layouts.admin')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update {{ $camp->title }}</h1>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('camps.update', $camp->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Camp Title</label>
                    <input type="text" name="title" value="{{ $camp->title }}" class="form-control" id="title"
                        placeholder="Camp title">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Camp slug</label>
                    <input type="text" name="slug" value="{{ $camp->slug }}" class="form-control" id="slug"
                        placeholder="your-camp-slug">
                </div>
                <div class="mb-3">
                    <label for="tagline" class="form-label">Camp Tagline</label>
                    <input type="text" name="tagline" value="{{ $camp->tagline }}" class="form-control" id="tagline"
                        placeholder="Camp tagline">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" value="{{ $camp->price }}" class="form-control" id="price"
                        placeholder="Price">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Your desc.." id="description" rows="3">
                        {{ $camp->description }}
                    </textarea>
                </div>
                {{-- create button cencel --}}
                <div class="d-inline-flex">
                    <a href="{{ route('camps.index') }}" class="btn mr-2 btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection