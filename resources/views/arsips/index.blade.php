@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row m-2 d-block">
                <h1 class="mb-1">Arsip Surat</h1>
                <div>
                    <p class="mb-0">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
                    <p>Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                <div class="row mt-3">
                    <div class="col-2 justify-content-center">
                        <h4 class="text-center"> Cari Surat :</h4>
                    </div>
                    <div class="col-8 justify-content-center">
                        <form class="form-group" action="" method="GET">
                            <div class="input-group input-group-md">
                                <input type="search" class="form-control form-control-md" placeholder="Search"
                                    value="" name="search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-md btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @include('arsips.table')
                <div class="row m-3">
                    <a href="{{ route('arsips.create') }}" class="btn btn-default btn-icon-split btn-sm float-right">
                        <span class="icon text-black-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Arsipkan Surat..</span>
                    </a>
                </div>
                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
