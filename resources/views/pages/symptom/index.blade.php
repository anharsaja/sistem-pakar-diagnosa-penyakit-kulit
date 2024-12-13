{{-- Pages for see data symptom --}}
<x-dashboard-layout>
    <div style="m margin-right:auto; margin-left:auto; margin-top:3rem">
        @if (session('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4> <i class="icon fa fa-check"></i> Success</h4>
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Failed</h4>
                `{{ session('error') }}`
            </div>
        @endif

    </div>
    <div class="box">
        <div
            style="justify-content: space-between; display:flex; padding: 0.8rem; height: 6rem; align-items:center; margin-top:0">
            <h3>Data Gejala</h3>
            <a href="{{ route('symptom.create') }}">
                <button class="btn btn-primary">Tambah Gejala</button>
            </a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example" class="table table-bordered table-striped dataTable" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Kode Penyakit</th>
                                    <th>Penyakit</th>
                                    <th>Kode Gejala</th>
                                    <th>Nama Gejala</th>
                                    <th>Expert Value</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diseases as $key => $disease)
                                    <tr>
                                        <!-- Merge No dan Nama Penyakit -->
                                        @if ($disease->symptoms->isNotEmpty())
                                            <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                                {{ $key + 1 }}</td>
                                            <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                                {{ $disease->code }}</td>
                                            <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                                {{ $disease->name }}</td>


                                            <td>{{ $disease->symptoms[0]->code }}</td>
                                            <td>{{ $disease->symptoms[0]->name }}</td>
                                            <td>{{ $disease->symptoms[0]->pivot->value }}</td>
                                            <td><a href="{{ route('symptom.edit', $disease->symptoms[0]->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <button data-toggle="modal"
                                                    data-target="#deleteModal{{ $disease->symptoms[0]->id }}"
                                                    data-id="{{ $disease->symptoms[0]->id }}"
                                                    class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        @endif
                                        <!-- Gejala pertama -->
                                    </tr>
                                    <!-- Gejala berikutnya -->
                                    @foreach ($disease->symptoms->slice(1) as $symptom)
                                        <tr>
                                            <td>{{ $symptom->code }}</td>
                                            <td>{{ $symptom->name }}</td>
                                            <td>{{ $symptom->pivot->value }}</td>
                                            <td><a href="{{ route('symptom.edit', $symptom->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <button data-toggle="modal"
                                                    data-target="#deleteModal{{ $symptom->id }}"
                                                    data-id="{{ $symptom->id }}"
                                                    class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="deleteModal{{ $symptom->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data gejala
                                                        <b>"{{ $symptom->name }}"</b>?
                                                        <!-- Form Hapus (ditempatkan di dalam modal) -->
                                                    </div>
                                                    <form id="delete-form"
                                                        action="{{ route('symptom.destroy', $symptom->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline pull-left"
                                                                data-dismiss="modal"
                                                                style="background-color: grey;">Batal</button>
                                                            <button type="submit" class="btn btn-outline btn-danger"
                                                                id="confirmDeleteButton"
                                                                style="background-color: red">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- Modal Delete --}}
                                    @if ($disease->symptoms->isNotEmpty())
                                        <div class="modal fade" id="deleteModal{{ $disease->symptoms[0]->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data gejala
                                                        <b>"{{ $disease->symptoms[0]->name }}"</b>?
                                                        <!-- Form Hapus (ditempatkan di dalam modal) -->
                                                    </div>
                                                    <form id="delete-form"
                                                        action="{{ route('symptom.destroy', $disease->symptoms[0]->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline pull-left"
                                                                data-dismiss="modal"
                                                                style="background-color: grey;">Batal</button>
                                                            <button type="submit" class="btn btn-outline btn-danger"
                                                                id="confirmDeleteButton"
                                                                style="background-color: red">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
</x-dashboard-layout>
