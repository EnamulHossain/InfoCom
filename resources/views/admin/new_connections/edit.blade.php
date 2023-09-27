@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit New Connection</h2>
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

                <form action="{{ route('new-connections.update', $newConnection->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $newConnection->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $newConnection->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ $newConnection->phone }}">
                    </div>

                    <div class="form-group">
                        <label for="customer_id">Customer ID</label>
                        <input type="text" name="customer_id" class="form-control" placeholder="customer_id"
                            value="{{ $newConnection->customer_id }}" required>
                    </div>

                    <div class="form-group">
                        <label for="current_address">Current Address</label>
                        <textarea name="current_address" class="form-control" id="current_address" required>{{ $newConnection->current_address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="1" {{ $newConnection->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$newConnection->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
