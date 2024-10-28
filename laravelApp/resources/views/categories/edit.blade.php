<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $category->description }}</textarea>

        <button type="submit">Update Category</button>
    </form>
@endsection
