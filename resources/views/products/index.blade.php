@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Продукти</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Додати новий продукт</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Назва продукта</th>
                <th>Ціна</th>
                <th>Опис продукта</th>
                <th>URL зображенняя</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->ProductName }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->ProductDescription }}</td>
                <td><img src="{{ asset('images/' . $product->ImageURL) }}" style="width: 100px; height: auto;"></td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редагувати</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Видалити</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }} <!-- Пагінація -->
</div>
@endsection
