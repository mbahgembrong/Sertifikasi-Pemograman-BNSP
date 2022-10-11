<div class="table-responsive">
    <table class="table" id="arsips-table">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu Pengarsipan</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arsips as $arsip)
                <tr>
                    <td>{{ $arsip->no_surat }}</td>
                    <td>{{ $arsip->kategori }}</td>
                    <td>{{ $arsip->judul }}</td>
                    <td>{{ $arsip->created_at }}</td>
                    <td>
                        {!! Form::open(['route' => ['arsips.destroy', $arsip->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {!! Form::button('<i class="far fa-trash-alt"></i> Hapus', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'id'=>'delete',
                                // 'onclick' => "return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')",
                            ]) !!}
                        </div>
                        <a href="{{ route('arsips.download', [$arsip->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="fas fa-download"></i>
                            Unduh
                        </a>
                        <a href="{{ route('arsips.show', [$arsip->id]) }}" class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                            Lihat >>
                        </a>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@push('page_scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.0/dist/sweetalert2.all.min.js"
        integrity="sha256-7Aj3hR8VjszIO1+v+ehR706sD5wpug0foOso7pqP4OY=" crossorigin="anonymous"></script>

    <script>
        $('button#delete').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            new Swal({
                title: "Alert?",
                text: "Apakah Anda yakin ingin menghapus arsip surat ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush
