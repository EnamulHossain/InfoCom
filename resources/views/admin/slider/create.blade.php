@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>{{ isset($slider) ? 'Edit Slider' : 'Create Slider' }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ isset($slider) ? route('update.slider', $slider->id) : route('store.slider') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($slider))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Slider Title </label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                            placeholder="Slider Title" value="{{ isset($slider) ? $slider->title : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Slider Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ isset($slider) ? $slider->description : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Slider Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        @if (isset($slider))
                            <img src="{{ asset($slider->image) }}" alt="Current Image"
                                style="max-width: 200px; margin-top: 10px;">
                            <input type="hidden" name="old_image" value="{{ $slider->image }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Order</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="order">{{ isset($slider) ? $slider->order : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active" {{ isset($slider) && $slider->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ isset($slider) && $slider->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>                    
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit"
                            class="btn btn-primary btn-default">{{ isset($slider) ? 'Update' : 'Submit' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
