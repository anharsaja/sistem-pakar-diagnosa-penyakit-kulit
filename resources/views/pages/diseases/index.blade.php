{{-- Pages for see data symptom --}}
<x-dashboard-layout>
    <div class="container">

        <div>
            <!-- Modal Success -->
            @if (session('success'))
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Berhasil!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ session('success') }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Modal Error -->
            @if (session('error'))
                <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="errorModalLabel">Gagal!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ session('error') }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>


        <div class="box">
            <div
                style="justify-content: space-between; display:flex; padding: 0.8rem; height: 6rem; align-items:center; margin-top:0">
                <h3>Data Penyakit</h3>
                <a href="{{ route('disease.create') }}">
                    <button class="btn btn-primary">Tambah Penyakit</button>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diseases as $disease)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $disease->code }}</td>
                                            <td>{{ $disease->name }}</td>
                                            <td>
                                                <!-- Tombol Hapus yang memunculkan modal -->
                                                <button type="button" class="btn btn-app"
                                                    style="min-width: 60px !important" data-toggle="modal"
                                                    data-target="#editModal{{ $disease->id }}"
                                                    data-id="{{ $disease->id }}">
                                                    <i class="fa fa-edit"></i> Hapus
                                                </button>
                                                <button type="button" class="btn btn-app"
                                                    style="min-width: 60px !important" data-toggle="modal"
                                                    data-target="#deleteModal{{ $disease->id }}"
                                                    data-id="{{ $disease->id }}">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </td>
                                        </tr>



                                        {{-- modal delete --}}
                                        <div class="modal fade" id="deleteModal{{ $disease->id }}" tabindex="-1"
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
                                                        Apakah Anda yakin ingin menghapus data penyakit
                                                        <b>{{ $disease->name }}</b>?
                                                        <!-- Form Hapus (ditempatkan di dalam modal) -->
                                                    </div>
                                                    <form id="delete-form"
                                                        action="{{ route('disease.destroy', $disease->id) }}"
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

                                        {{-- edit  modal --}}
                                        <div class="modal fade" id="editModal{{ $disease->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="editModalLabel">Edit Data Penyakit
                                                        </h4>
                                                    </div>
                                                    <form id="edit-form"
                                                        action="{{ route('disease.update', $disease->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="code-{{ $disease->id }}">Code
                                                                    Penyakit</label>
                                                                <input type="text" class="form-control"
                                                                    id="code-{{ $disease->id }}" name="code"
                                                                    value="{{ old('code', $disease->code) }}"
                                                                    placeholder="Masukkan kode penyakit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-{{ $disease->id }}">Nama
                                                                    Penyakit</label>
                                                                <input type="text" class="form-control"
                                                                    id="name-{{ $disease->id }}" name="name"
                                                                    value="{{ old('name', $disease->name) }}"
                                                                    placeholder="Masukkan nama penyakit">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan
                                                                Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                $('#successModal').modal('show');
            @endif

            @if (session('error'))
                $('#errorModal').modal('show');
            @endif
        });
    </script>

</x-dashboard-layout>
