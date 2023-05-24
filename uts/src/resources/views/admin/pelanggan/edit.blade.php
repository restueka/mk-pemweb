@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggan.update", [$pelanggan->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="pelangganname">{{ trans('cruds.pelanggan.fields.pelangganname') }}</label>
                <input class="form-control {{ $errors->has('pelangganname') ? 'is-invalid' : '' }}" type="text" name="pelangganname" id="pelangganname" value="{{ old('pelangganname', $pelanggan->pelangganname) }}" required>
                @if($errors->has('pelangganname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pelangganname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.pelangganname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nomor_pelanggan">{{ trans('cruds.pelanggan.fields.nomor_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('nomor_pelanggan') ? 'is-invalid' : '' }}" type="text" name="nomor_pelanggan" id="nomor_pelanggan" value="{{ old('nomor_pelanggan', $pelanggan->nomor_pelanggan) }}" required>
                @if($errors->has('nomor_pelanggan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomor_pelanggan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.jenis_kelamin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.pelanggan.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $pelanggan->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.nomor_pelanggan_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="nomor_pelanggan">{{ trans('cruds.pelanggan.fields.nomor_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('fakultas') ? 'is-invalid' : '' }}" type="text" name="nomor_pelanggan" id="nomor_pelanggan" value="{{ old('nomor_pelanggan', $pelanggan->nomor_pelanggan) }}" required>
                @if($errors->has('pelanggan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomor_pelanggan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.umur_pelanggan_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="umur_pelanggan">{{ trans('cruds.pelanggan.fields.umur_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('umur_pelanggan') ? 'is-invalid' : '' }}" type="text" name="umur_pelanggan" id="umur_pelanggan" value="{{ old('umur_pelanggan', $pelanggan->umur_pelanggan) }}" required>
                @if($errors->has('umur_pelanggan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('umur_pelanggan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.jenis_kelamin_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="jenis_kelamin">{{ trans('cruds.pelanggan.fields.jenis_kelamin') }}</label>
                <input class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin', $pelanggan->jenis_kelamin) }}" required>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.jenis_kelamin_helper') }}</span>
            </div>
            </div>

            <div class="form-group">
                <label class="required" for="alamat">{{ trans('cruds.pelanggan.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('fakultas') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat', $pelanggan->alamat) }}" required>
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.alamat_helper') }}</span>
            </div>

            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
