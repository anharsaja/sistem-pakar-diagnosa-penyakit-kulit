<x-dashboard-layout>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
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
                        <td>{{ $disease->id }}</td>
                        <td>{{ $disease->code }}</td>
                        <td>{{ $disease->name }}</td>
                        <td>ok</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</x-dashboard-layout>