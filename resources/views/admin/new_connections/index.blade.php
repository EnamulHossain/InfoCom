@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>New Connections</h2>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Current Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newConnections as $index => $newConnection)
                        <tr>
                            <td>{{ $index->id }}</td>
                            <td>{{ $newConnection->name }}</td>
                            <td>{{ $newConnection->email }}</td>
                            <td>{{ $newConnection->phone }}</td>
                            <td>{{ $newConnection->current_address }}</td>
                            <td>
                                @if ($newConnection->status)
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('new-connections.edit', $newConnection->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('new-connections.destroy', $newConnection->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this connection?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{ $newConnections->links() }} <!-- Display pagination links -->
        </div>
    </div>
</div>
@endsection
