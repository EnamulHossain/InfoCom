@extends('admin.admin_master')

@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h1>Team</h1>
                        <div class="ml-3 mb-3">
                            <a href="{{ url('/admin/team/create') }}" class="btn btn-success">Create Team Member</a>
                        </div>
                    </div>
                    <div class="card-body">
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
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ $team->id }}</td>
                                            <td>{{ $team->name }}</td>
                                            <td>
                                                @if ($team->image)
                                                    <img src="{{ asset('storage/' . $team->image) }}"
                                                        alt="Team Member Image" class="img-thumbnail"
                                                        style="max-width: 100px;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $team->position }}</td>
                                            <td>{{ $team->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('team.edit', $team->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('team.destroy', $team->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $teams->links() }} <!-- Pagination Links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
