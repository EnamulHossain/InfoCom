@extends('admin.admin_master')

@section('admin')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Packages</h1>
            <a href="{{ route('package.create') }}" class="btn btn-success">Create Package</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Package Name</th>
                        <th>Regular Price</th>
                        <th>Offer Price</th>
                        <th>Bandwidth</th>
                        <th>Feature 1</th>
                        <th>Feature 2</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->package_name }}</td>
                            <td>{{ $package->regular_price }}</td>
                            <td>{{ $package->offer_price }}</td>
                            <td>{{ $package->bandwidth }}</td>
                            <td>{{ $package->feature_1 }}</td>
                            <td>{{ $package->feature_2 }}</td>
                            <td>{{ $package->order }}</td>
                            <td>
                                @if ($package->status)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('package.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('package.destroy', $package->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this package?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $packages->links() }} <!-- Display pagination links -->
    </div>
@endsection
