@extends('layouts.app')

@section('title', 'Add Supplier')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Add Supplier
        </p>
    </header>
    <div class="card-content">
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="e.g. ABC Distributors" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Status</label>
                <div class="control">
                    <div class="select">
                        <select name="status" required>
                            <option value="active" selected>Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green">
                        Save
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
