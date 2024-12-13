{{-- Pages for see data symptom --}}
<x-dashboard-layout>
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
                                        <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                            {{ $key + 1 }}</td>
                                        <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                            {{ $disease->code }}</td>
                                        <td rowspan="{{ $disease->symptoms->count() }}" class="merge">
                                            {{ $disease->name }}</td>
                                        <!-- Gejala pertama -->
                                        <td>{{ $disease->symptoms[0]->code }}</td>
                                        <td>{{ $disease->symptoms[0]->name }}</td>
                                        <td>{{ $disease->symptoms[0]->pivot->value }}</td>
                                        <td>ok</td>
                                    </tr>
                                    <!-- Gejala berikutnya -->
                                    @foreach ($disease->symptoms->slice(1) as $symptom)
                                        <tr>
                                            <td>{{ $symptom->code }}</td>
                                            <td>{{ $symptom->name }}</td>
                                            <td>{{ $symptom->pivot->value }}</td>
                                            <td>ok</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
</x-dashboard-layout>
