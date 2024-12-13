{{-- Pages for see data disease --}}
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

        <div class="box box-primary" style="max-width: 660px; margin-right:auto; margin-left:auto; margin-top:3rem">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Penyakit</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('disease.store') }}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="namaGejala">Nama Penyakit</label>
                        <input type="text" name="name" class="form-control" id="namaGejala"
                            placeholder="Masukkan Nama Gejala">
                    </div>
                    <div class="form-group">
                        <label for="code">Code Penyakit</label>
                        <input type="text" name="code" class="form-control" id="code"
                            placeholder="Masukkan Kode">
                    </div>


                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ route('disease.index') }}">
                        Batal
                    </a>
                </div>
            </form>
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
