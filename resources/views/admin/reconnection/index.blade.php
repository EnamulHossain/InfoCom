@extends('admin.admin_master')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Reconnections</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Reason</th>
                                    <th>Customer ID</th>
                                    <th>Previous Address</th>
                                    <th>Current Address</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reconnections as $reconnection)
                                <tr>
                                    <td>{{ $reconnection->id }}</td>
                                    <td>{{ $reconnection->name }}</td>
                                    <td>{{ $reconnection->email }}</td>
                                    <td>{{ $reconnection->reason }}</td>
                                    <td>{{ $reconnection->customer_id }}</td>
                                    <td>{{ $reconnection->previous_address }}</td>
                                    <td>{{ $reconnection->current_address }}</td>
                                    <td>
                                        @if ($reconnection->status)
                                        <span class="badge badge-success">Complete</span>
                                        @else
                                        <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('reconnections.edit', $reconnection->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('reconnections.destroy', $reconnection->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this reconnection?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $reconnections->links() }} <!-- Pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
