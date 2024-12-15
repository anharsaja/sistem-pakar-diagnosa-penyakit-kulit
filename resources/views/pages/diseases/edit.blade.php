{{-- Pages for see data symptom --}}
<x-dashboard-layout>
    <div class="container">
        <div style="max-width: 660px; margin-right:auto; margin-left:auto; margin-top:3rem">
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
        <div class="box box-primary" style="max-width: 660px; margin-right:auto; margin-left:auto; margin-top:3rem">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Penyakit</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('disease.update', $disease->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="namaGejala">Nama Penyakit</label>
                        <input type="text" name="name" class="form-control" id="namaGejala"
                            placeholder="Masukkan Nama Gejala" value="{{ $disease->name }}">
                    </div>
                    <div class="form-group">
                        <label for="code">Code Penyakit</label>
                        <input type="text" name="code" class="form-control" id="code"
                            placeholder="Masukkan Kode" value="{{ $disease->code }}">
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
</x-dashboard-layout>
