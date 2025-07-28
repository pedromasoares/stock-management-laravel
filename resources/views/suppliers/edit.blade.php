@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Edit Supplier
        </p>
    </header>
    <div class="card-content">
        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ old('name', $supplier->name) }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Status</label>
                <div class="control">
                    <div class="select">
                        <select name="status" required>
                            <option value="active" {{ $supplier->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $supplier->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green">
                        Update
                    </button>
                </div>
                <div class="control">
                    <a href="{{ route('suppliers.index') }}" class="button red">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
