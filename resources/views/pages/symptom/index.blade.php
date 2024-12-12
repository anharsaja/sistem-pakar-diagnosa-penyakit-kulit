{{-- Pages for see data symptom --}}
<x-dashboard-layout>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Gejala</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Code</th>
                                    <th>Nama Gejala</th>
                                    <th>Penyakit</th>
                                    <th>Expert Value</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($symptoms as $key => $symptom)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td> {{ $symptom->code }} </td>

                                        <td> {{ $symptom->name }} </td>

                                        <td> {{ $symptom->disease->name }} </td>

                                        <td> {{ $symptom->expert_value }} </td>

                                        <td class="flex">
                                            <button class="btn btn-sm btn-warning">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
</x-dashboard-layout>
