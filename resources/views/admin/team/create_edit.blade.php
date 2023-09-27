@extends('admin.admin_master')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>{{ isset($team) ? 'Edit Team Member' : 'Create Team Member' }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ isset($team) ? route('team.update', $team->id) : route('team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($team))
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', isset($team) ? $team->name : '') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" name="position" class="form-control" value="{{ old('position', isset($team) ? $team->position : '') }}">
                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if(isset($team) && $team->image)
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Team Member Image" class="mt-2" style="max-width: 200px;">
                            @endif
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status" required>
                                <option value="1" {{ isset($package) && $package->status === 'Active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="0" {{ isset($package) && $package->status === 'Inactive' ? 'selected' : '' }}>
                                    Inactive</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ isset($team) ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
