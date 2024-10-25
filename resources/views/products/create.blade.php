@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Додати новий продукт</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="mb-3">
            <label for="ProductName" class="form-label">Назва продукта:</label>
            <input type="text" id="ProductName" name="ProductName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Ціна продукта:</label>
            <input type="number" id="Price" name="Price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ProductDescription" class="form-label">Опис продукта:</label>
            <textarea id="ProductDescription" name="ProductDescription" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="ImageURL" class="form-label">URL зображення продукта:</label>
            <input type="text" id="ImageURL" name="ImageURL" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Зберегти</button>
    </form>
</div>
@endsection
