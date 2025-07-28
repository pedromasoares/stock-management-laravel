@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Edit Product</p>
    </header>
    <div class="card-content">
        <form method="POST" action="{{ route('items.update', $item->id) }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label">SKU</label>
                <div class="control">
                    <input class="input" type="text" name="sku" value="{{ $item->sku }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ $item->name }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Category</label>
                <div class="control">
                    <div class="select">
                        <select name="category_id" required>
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Supplier</label>
                <div class="control">
                    <div class="select">
                        <select name="supplier_id" required>
                            <option value="">Select</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" {{ $item->supplier_id == $supplier->id ? 'selected' : '' }}>
                                    {{ $supplier->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Brand</label>
                <div class="control">
                    <div class="select">
                        <select name="brand_id" required>
                            <option value="">Select</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" {{ $item->brand_id == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Price (€)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="price" value="{{ $item->price }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Stock</label>
                <div class="control">
                    <input class="input" type="number" name="stock" value="{{ $item->stock }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Weight (kg)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="weight" value="{{ $item->weight }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Width (cm)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="width" value="{{ $item->width }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Height (cm)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="height" value="{{ $item->height }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Length (cm)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="length" value="{{ $item->length }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">VAT (%)</label>
                <div class="control">
                    <input class="input" type="number" step="0.01" name="vat" value="{{ $item->vat }}" required>
                </div>
            </div>

            <div class="field is-grouped mt-4">
                <div class="control">
                    <button class="button green" type="submit">Update</button>
                </div>
                <div class="control">
                    <a href="{{ route('items.index') }}" class="button red">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
