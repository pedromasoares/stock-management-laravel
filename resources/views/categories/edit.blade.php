@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<a href="{{ route('categories.index') }}" class="button light mb-4">
    <span>Back</span>
</a>

<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Edit Category
        </p>
    </header>
    <div class="card-content">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ old('name', $category->name) }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Status</label>
                <div class="control">
                    <div class="select">
                        <select name="status" required>
                            <option value="active" {{ $category->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $category->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field grouped mt-4">
                <div class="control">
                    <button type="submit" class="button green">
                        <span>Save Changes</span>
                    </button>
                </div>
                <div class="control">
                    <a href="{{ route('categories.index') }}" class="button red">
                        <span>Cancel</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
