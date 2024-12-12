{{-- Pages for see data symptom --}}
<x-dashboard-layout>
    <div class="container">
        <div style="max-width: 660px; margin-right:auto; margin-left:auto; margin-top:3rem">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4> <i class="icon fa fa-check"></i> Alert!</h4>
                {{ session('success') }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, cumque?
            </div>
            @if (session('success'))
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    `{{ session('error') }}`
                </div>
            @endif

        </div>
        <div class="box box-primary" style="max-width: 660px; margin-right:auto; margin-left:auto; margin-top:3rem">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Gejala</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="namaGejala">Nama Gejala</label>
                        <input type="text" name="name" class="form-control" id="namaGejala"
                            placeholder="Masukkan Nama Gejala">
                    </div>
                    <div class="form-group">
                        <label for="code">Code Gejala</label>
                        <input type="text" name="code" class="form-control" id="code"
                            placeholder="Masukkan Kode">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ route('symptom.index') }}">
                        Batal
                    </a>
                </div>
            </form>
        </div>

    </div>
</x-dashboard-layout>
