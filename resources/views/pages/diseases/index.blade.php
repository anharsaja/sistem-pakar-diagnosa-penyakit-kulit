<x-dashboard-layout>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penyakit</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <!-- Tambahkan class table-responsive untuk scrollable jika diperlukan -->
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Kode Penyakit</th>
                            <th>Nama Penyakit</th>
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
                                    <button type="button" class="btn btn-app" style="min-width: 60px !important"
                                        data-toggle="modal" data-target="#editModal" data-id="{{ $disease->id }}">
                                        <i class="fa fa-edit"></i> Hapus
                                    </button>
                                    <button type="button" class="btn btn-app" style="min-width: 60px !important"
                                        data-toggle="modal" data-target="#deleteModal" data-id="{{ $disease->id }}">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>


                            {{-- modal delete --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h4>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data penyakit <b>{{ $disease->name }}</b>?
                                            <!-- Form Hapus (ditempatkan di dalam modal) -->
                                        </div>
                                        <form id="delete-form" action="{{ route('disease.destroy', $disease->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left"
                                                    data-dismiss="modal" style="background-color: grey;">Batal</button>
                                                <button type="submit" class="btn btn-outline btn-danger"
                                                    id="confirmDeleteButton"
                                                    style="background-color: red">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="editModalLabel">Edit Data Penyakit <b>{{ $disease->name }}</b></h4>
                </div>
                <form id="edit-form" action="{{ route('disease.update', $disease->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="input1">Code Penyakit</label>
                            <input type="text" class="form-control" id="input1" name="input1"
                                placeholder="Enter the code">
                        </div>
                        <div class="form-group">
                            <label for="input2">Nama Penyakit</label>
                            <input type="text" class="form-control" id="input2" name="input2"
                                placeholder="Enter the name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"
                            style="background-color: grey;">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-dashboard-layout>
