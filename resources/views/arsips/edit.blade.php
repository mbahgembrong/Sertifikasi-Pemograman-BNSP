@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Arsip Surat</h1>
                    <div>
                        <p class="mb-0">Edit surat yang telah terbit pada form ini untuk diarsipkan.</p>
                        <p class="mb-0">Catatan</p>
                        <p class="font-weight-light text-danger">* Gunakan file berformat PDF</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($arsip, ['route' => ['arsips.update', $arsip->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('arsips.fields')
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('arsips.index') }}" class="btn btn-default">
                    << Kembali</a>
                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
