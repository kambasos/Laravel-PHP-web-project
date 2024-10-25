@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редагування продукту</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ProductName" class="form-label">Назва продукта:</label>
            <input type="text" id="ProductName" name="ProductName" class="form-control" value="{{ old('ProductName', $product->ProductName) }}" required>
            @error('ProductName')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Ціна прдукта:</label>
            <input type="number" id="Price" name="Price" class="form-control" value="{{ old('Price', $product->Price) }}" required>
            @error('Price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ProductDescription" class="form-label">Опис продукта:</label>
            <textarea id="ProductDescription" name="ProductDescription" class="form-control">{{ old('ProductDescription', $product->ProductDescription) }}</textarea>
            @error('ProductDescription')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ImageURL" class="form-label">URL зображення продукта:</label>
            <input type="text" id="ImageURL" name="ImageURL" class="form-control" value="{{ old('ImageURL', $product->ImageURL) }}">
            @error('ImageURL')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
</div>
@endsection
