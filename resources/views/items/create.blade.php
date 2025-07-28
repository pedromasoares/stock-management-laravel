@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Add Product</p>
        </header>
        <div class="card-content">
            <form method="POST" action="{{ route('items.store') }}">
                @csrf

                <div class="field">
                    <label class="label">SKU</label>
                    <div class="control">
                        <input class="input" type="text" name="sku" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" name="name" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="description" placeholder="Enter product description..."
                            required>{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Category</label>
                    <div class="control">
                        <div class="select">
                            <select name="category_id">
                                <option value="">Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Supplier</label>
                    <div class="control">
                        <div class="select">
                            <select name="supplier_id">
                                <option value="">Select</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Brand</label>
                    <div class="control">
                        <div class="select">
                            <select name="brand_id">
                                <option value="">Select</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Price</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="price" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Stock</label>
                    <div class="control">
                        <input class="input" type="number" name="stock" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Weight (kg)</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="weight" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Width (cm)</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="width" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Height (cm)</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="height" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Length (cm)</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="length" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">VAT (%)</label>
                    <div class="control">
                        <input class="input" type="number" step="0.01" name="vat" required>
                    </div>
                </div>

                <div class="field is-grouped mt-4">
                    <div class="control">
                        <button class="button green" type="submit">Save</button>
                    </div>
                    <div class="control">
                        <a href="{{ route('items.index') }}" class="button red">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection