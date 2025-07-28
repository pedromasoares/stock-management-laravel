@extends('layouts.app')

@section('title', 'Products')

@section('content')
@if (session('success'))
    <div class="notification is-success">
        {{ session('success') }}
    </div>
@endif

<div class="card has-table">
    <header class="card-header is-flex is-justify-content-space-between is-align-items-center">
        <p class="card-header-title">
            Product List
        </p>
        <a href="{{ route('items.create') }}">
            <button class="button is-info green mb-4" style="height: 40px; min-width: 120px;">Add</button>
        </a>
    </header>

    <form method="GET" action="{{ route('items.index') }}" class="mb-4" style="max-width: 100%;">
        <div class="field" style="display: flex; gap: 10px;">
            <div class="control" style="flex: 1;">
                <input type="text" name="search" value="{{ request('search') }}" class="input"
                    placeholder="Search by Product Name">
            </div>
            <div class="control">
                <button class="button is-info blue" type="submit" style="height: 40px; min-width: 120px;">
                    Search
                </button>
            </div>
            @if(request('search'))
            <div class="control">
                <a href="{{ route('items.index') }}" class="button is-light" style="height: 40px; min-width: 120px;">
                    ❌ Clear
                </a>
            </div>
            @endif
        </div>
    </form>

    <div class="card-content">
        <table class="table">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->sku }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name ?? 'N/A' }}</td>
                        <td>{{ $item->supplier->name ?? 'N/A' }}</td>
                        <td>{{ $item->brand->name ?? 'N/A' }}</td>
                        <td>{{ number_format($item->price, 2, ',', '.') }}€</td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <a href="{{ route('items.edit', $item->id) }}" class="button blue">
                                    <span>Edit</span>
                                </a>
                                <form method="POST" action="{{ route('items.destroy', $item->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button red" onclick="return confirm('Are you sure?')">
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
