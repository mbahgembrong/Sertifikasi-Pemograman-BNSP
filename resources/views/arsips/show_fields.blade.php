<!-- No Surat Field -->
<div class="col-sm-12">
    {!! Form::label('no_surat', 'No Surat:') !!}
    <p>{{ $arsip->no_surat }}</p>
</div>

<!-- Kategori Field -->
<div class="col-sm-12">
    {!! Form::label('kategori', 'Kategori:') !!}
    <p>{{ $arsip->kategori }}</p>
</div>

<!-- Judul Field -->
<div class="col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $arsip->judul }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12 text-nowrap">
    {!! Form::label('created_at', 'Waktu Unggah:') !!}
    <p>{{ $arsip->created_at }}</p>
</div>
