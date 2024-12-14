<x-dashboard-layout>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Hasil Diagnosa</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <!-- Tambahkan class table-responsive untuk scrollable jika diperlukan -->
            <div class="table-responsive">

                @csrf
                <table id="example" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama Penyakit</th>
                            <th>Keyakinan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diagnosaAkhir as $key => $diagnosa)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $diagnosa['disease'] }}
                                </td>
                                <td>{{ $diagnosa['certainty'] }}%</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">gejala Dipilih</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <!-- Tambahkan class table-responsive untuk scrollable jika diperlukan -->
            <div class="table-responsive">

                @csrf
                <table id="example" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($symptoms as $key => $symptom)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $symptom->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</x-dashboard-layout>
