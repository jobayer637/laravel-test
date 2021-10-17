@extends('layouts.backend.app')


@push('css')
@endpush

@section('admin-content')
<div class="card">
    <div class="header bg-amber">
        <h2>
            Add New Product
            <small>
                <a href="{{route('product.index')}}" class="badge badge-info"><i class="fas fa-angle-double-left"></i> Go to product</a>
            </small>
        </h2>
    </div>
    <div class="body">
        <form id="form_validation" action="{{route('product.store')}}" method="POST">
            @csrf
            <input type="text" style="display: none" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control" name="name" required>
                    <label class="form-label">Product Name</label>
                </div>
            </div>

            <div class="form-group form-float">
                <div class="form-line">
                    <input type="number" class="form-control" name="price" required>
                    <label class="form-label">Product Price</label>
                </div>
            </div>

            <div class="form-group form-float">
                <div class="form-line">
                    <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                    <label class="form-label">Product Description</label>
                </div>
            </div>

            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/backend/js/admin.js')}}"></script>
<script src="{{asset('assets/backend/js/pages/forms/form-validation.js')}}"></script>

@endpush