@extends('admin.admin_master')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Directors</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{url('/admin/directors/create')}}" class="btn btn-success">Create Director</a>
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
                                @foreach ($directors as $index => $director)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $director->name }}</td>
                                        <td>
                                            @if ($director->image)
                                                <img src="{{ asset('storage/' . $director->image) }}" alt="Director Image" class="img-thumbnail" style="max-width: 100px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $director->position }}</td>
                                        <td>{{ $director->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('directors.edit', $director->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('directors.destroy', $director->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this director?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $directors->links() }} <!-- Pagination Links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
