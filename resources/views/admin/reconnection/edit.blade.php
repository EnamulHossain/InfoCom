@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>{{ isset($reconnection) ? 'Edit Reconnection' : 'Create Reconnection' }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ isset($reconnection) ? route('reconnections.update', $reconnection->id) : route('reconnections.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($reconnection))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Your Name*</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Your Name" value="{{ isset($reconnection) ? $reconnection->name : old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">Your Email*</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Your Email" value="{{ isset($reconnection) ? $reconnection->email : old('email') }}">
                </div>
                <div class="form-group">
                    <label for="reason">Select Reason of Reconnection</label>
                    <input type="text" name="reason" class="form-control" id="reason"
                        placeholder="Select Reason" value="{{ isset($reconnection) ? $reconnection->reason : old('reason') }}">
                </div>
                <div class="form-group">
                    <label for="customer_id">Current Infocom ID</label>
                    <input type="text" name="customer_id" class="form-control" id="customer_id"
                        placeholder="Current Infocom ID" value="{{ isset($reconnection) ? $reconnection->customer_id : old('customer_id') }}">
                </div>
                <div class="form-group">
                    <label for="previous_address">Previous Address</label>
                    <textarea name="previous_address" class="form-control" id="previous_address"
                        rows="3">{{ isset($reconnection) ? $reconnection->previous_address : old('previous_address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="current_address">Current Address</label>
                    <textarea name="current_address" class="form-control" id="current_address"
                        rows="3">{{ isset($reconnection) ? $reconnection->current_address : old('current_address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="1" {{ (isset($reconnection) && $reconnection->status == 1) ? 'selected' : '' }}>Complete</option>
                        <option value="0" {{ (isset($reconnection) && $reconnection->status == 0) ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit"
                        class="btn btn-primary btn-default">{{ isset($reconnection) ? 'Update' : 'Submit' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
