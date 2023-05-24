@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pelanggan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggan.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id') }}
                        </th>
                        <td>
                            {{ $pelanggan->id }}
                        </td>
                    </tr>
                    <tr>
                    <th>
                            {{ trans('cruds.pelanggan.fields.pelangganname') }}
                        </th>
                        <td>
                            {{ $pelanggan->pelangganname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.email') }}
                        </th>
                        <td>
                            {{ $pelanggaran->email }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nomor_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggaran->nomor_pelanggan }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.pelanggaran.fields.umur_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->umur_pelanggan }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.jenis_kelamin') }}
                        </th>
                        <td>
                            {{ $pelanggan->jenis_kelamin }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.alamat') }}
                        </th>
                        <td>
                            {{ $pelanggan->alamat }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggan.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection