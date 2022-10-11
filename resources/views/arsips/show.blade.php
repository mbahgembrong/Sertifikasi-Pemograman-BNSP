@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lihat Arsip Surat</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('arsips.show_fields')
                </div>
                <iframe id="pdf-viewer" src="{{ asset($url) }}"></iframe>
            </div>
            <div class="row m-3 ">
                <a class="btn btn-default float-right m-2" href="{{ route('arsips.index') }}">
                    << Kembali </a>
                        <a class="btn btn-warning float-right m-2" href="{{ route('arsips.download', [$arsip->id]) }}">
                            Unduh
                        </a>
                        <a class="btn btn-success float-right m-2" href="{{ route('arsips.edit', [$arsip->id]) }}">
                            Edit/Ganti File
                        </a>
            </div>
        </div>
    </div>
@endsection
@push('page_css')
    <style>
        #pdf-viewer {
            width: 100%;
            height: 80vh;
        }
    </style>
@endpush
