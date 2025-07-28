@extends('layouts.app')

@section('title', 'Edit Brand')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Edit Brand</p>
    </header>
    <div class="card-content">
        <form action="{{ route('brands.update', $brand->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label">Brand Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ old('name', $brand->name) }}" required>
                </div>
            </div>

            <div class="field mt-4">
                <label class="label">Status</label>
                <div class="control">
                    <div class="select">
                        <select name="status">
                            <option value="active" {{ old('status', $brand->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $brand->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
                    <a href="{{ route('brands.index') }}" class="button red">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
