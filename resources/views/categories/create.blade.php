@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
<div class="card mb-6">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-ballot"></i></span> New Category
        </p>
    </header>
    <div class="card-content">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="field">
                <label class="label">Name</label>
                <div class="control icons-left">
                    <input class="input" type="text" name="name" placeholder="Category Name" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Status</label>
                <div class="control">
                    <div class="select">
                        <select name="status" required>
                            <option value="">Select</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green">
                        <span>Save</span>
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
