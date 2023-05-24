@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggan.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="pelangganname">{{ trans('cruds.pelanggan.fields.pelangganname') }}</label>
                <input class="form-control {{ $errors->has('pelangganname') ? 'is-invalid' : '' }}" type="text" name="pelangganname" id="pelangganname" value="{{ old('pelangganname', '') }}" required>
                @if($errors->has('pelangganname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pelangganname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.pelangganname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.pelanggan.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection
