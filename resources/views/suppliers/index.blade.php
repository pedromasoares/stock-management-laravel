@extends('layouts.app')

@section('title', 'Suppliers')

@section('content')
@if (session('success'))
    <div class="notification is-success">
        {{ session('success') }}
    </div>
@endif

<div class="card has-table">
    <header class="card-header is-flex is-justify-content-space-between is-align-items-center">
        <p class="card-header-title">
            Supplier List
        </p>
        <a href="{{ route('suppliers.create') }}">
            <button class="button is-info green mb-4" style="height: 40px; min-width: 120px;">Add</button>
        </a>
    </header>

    <form method="GET" action="{{ route('suppliers.index') }}" class="mb-4" style="max-width: 100%;">
        <div class="field" style="display: flex; gap: 10px;">
            <div class="control" style="flex: 1;">
                <input type="text" name="search" value="{{ request('search') }}" class="input"
                    placeholder="Search by Supplier Name">
            </div>
            <div class="control">
                <button class="button is-info blue" type="submit" style="height: 40px; min-width: 120px;">
                    Search
                </button>
            </div>
            @if(request('search'))
            <div class="control">
                <a href="{{ route('suppliers.index') }}" class="button is-light" style="height: 40px; min-width: 120px;">
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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>
                            @if ($supplier->status === 'active')
                                <span class="tag is-success">Active</span>
                            @else
                                <span class="tag is-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="button blue">
                                    <span>Edit</span>
                                </a>
                                <form method="POST" action="{{ route('suppliers.destroy', $supplier->id) }}" style="display:inline;">
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
                        <td colspan="4" class="text-center">No suppliers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
