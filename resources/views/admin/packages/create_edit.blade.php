@extends('admin.admin_master')

@section('admin')
    <div class="container">
        <h1>{{ isset($package) ? 'Edit Package' : 'Create Package' }}</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ isset($package) ? route('package.update', $package->id) : route('package.store') }}" method="POST">
            @csrf
            @if (isset($package))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="package_name">Package Name</label>
                <input type="text" name="package_name" class="form-control" id="package_name"
                    value="{{ isset($package) ? $package->package_name : old('package_name') }}" required>
            </div>

            <div class="form-group">
                <label for="regular_price">Regular Price</label>
                <input type="text" name="regular_price" class="form-control" id="regular_price"
                    value="{{ isset($package) ? $package->regular_price : old('regular_price') }}">
            </div>

            <div class="form-group">
                <label for="offer_price">Offer Price</label>
                <input type="text" name="offer_price" class="form-control" id="offer_price"
                    value="{{ isset($package) ? $package->offer_price : old('offer_price') }}">
            </div>

            <div class="form-group">
                <label for="bandwith">Bandwidth</label>
                <input type="text" name="bandwith" class="form-control" id="bandwith"
                    value="{{ isset($package) ? $package->bandwith : old('bandwith') }}">
            </div>

            <div class="form-group">
                <label for="feature_1">Feature 1</label>
                <input type="text" name="feature_1" class="form-control" id="feature_1"
                    value="{{ isset($package) ? $package->feature_1 : old('feature_1') }}">
            </div>

            <div class="form-group">
                <label for="feature_2">Feature 2</label>
                <input type="text" name="feature_2" class="form-control" id="feature_2"
                    value="{{ isset($package) ? $package->feature_2 : old('feature_2') }}">
            </div>

            <div class="form-group">
                <label for="order">Order</label>
                <input type="text" name="order" class="form-control" id="order"
                    value="{{ isset($package) ? $package->order : old('order') }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status" required>
                    <option value="Active" {{ isset($package) && $package->status === 'Active' ? 'selected' : '' }}>Active
                    </option>
                    <option value="Inactive" {{ isset($package) && $package->status === 'Inactive' ? 'selected' : '' }}>
                        Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($package) ? 'Update' : 'Create' }} Package</button>
        </form>
    </div>
@endsection
