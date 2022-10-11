@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center  align-items-center">
                        <img src="{{ asset('img/about.jpeg') }}" class="rounded mx-auto" width="100" height="100">
                    </div>
                    <div class="col-8">
                        <ul>
                            <li>
                                <h5>Aplikasi ini dibuat oleh :</h5>
                            </li>
                            <li>Nama : Muhammad Ilham Wahiduddin</li>
                            <li>NIM : 1931730140</li>
                            <li>Tanggal : 12 Oktober 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('page_css')
    <style>
        img {}

        .card-body {
            padding: 0px;
        }

        .card-body ul {
            list-style: none;
            padding: 0px;
        }

        .card-body ul li {
            padding: 5px;
        }
    </style>
@endpush
