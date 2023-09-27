@extends('admin.admin_master')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Management</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{url('/admin/management/create')}}" class="btn btn-success">Create Management Member</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($managements as $index => $management)
                                    <tr>
                                        <td>{{ $index->id }}</td>
                                        <td>{{ $management->name }}</td>
                                        <td>
                                            @if ($management->image)
                                                <img src="{{ asset('storage/' . $management->image) }}" alt="Management Member Image" class="img-thumbnail" style="max-width: 100px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $management->position }}</td>
                                        <td>{{ $management->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('management.edit', $management->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('management.destroy', $management->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this management member?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $managements->links() }} <!-- Pagination Links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
