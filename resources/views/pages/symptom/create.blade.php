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
            <form role="form" action="{{ route('symptom.store') }}" method="post">
                @csrf
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
                    <div class="form-group">
                        <label for="code">Nama Penyakit</label>
                        <select id="value" class="form-control" name="disease_id">
                            @foreach ($diseases as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="value">Pilih Nilai Pakar:</label>
                        {{-- <label for="value">Pilih Nilai Pakar:</label> --}}
                        <select id="value" name="value" class="form-control">
                            <option value="0">0</option>
                            <option value="0.1">0.1</option>
                            <option value="0.2">0.2</option>
                            <option value="0.3">0.3</option>
                            <option value="0.4">0.4</option>
                            <option value="0.5">0.5</option>
                            <option value="0.6">0.6</option>
                            <option value="0.7">0.7</option>
                            <option value="0.8">0.8</option>
                            <option value="0.9">0.9</option>
                            <option value="1">1</option>
                        </select>

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
