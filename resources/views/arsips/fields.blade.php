<!-- No Surat Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_surat', 'Nomor Surat:') !!}
    {!! Form::text('no_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Kategori Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kategori', 'Kategori:') !!}
    {!! Form::select(
        'kategori',
        [
            'Undangan' => 'Undangan',
            'Pengumuman' => 'Pengumuman',
            'Nota Dinas' => 'Nota Dinas',
            'Pemberitahuan' => 'Pemberitahuan',
        ],
        null,
        [
            'class' => 'form-control custom-select',
        ],
    ) !!}
</div>


<!-- Judul Field -->
<div class="form-group col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-12">
    {!! Form::label('file', 'File Surat (PDF):') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file', ['class' => 'custom-file-input']) !!}
            {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
