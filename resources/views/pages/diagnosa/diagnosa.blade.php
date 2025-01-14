<x-dashboard-layout>
    <div class="box">
        <div class="box-header">
            <h1 class="box-title" style="width: 100%; font-size: 22px; font-weight: bold;">Hasil Diagnosa</h1>
        </div><!-- /.box-header -->
        <div class="box-body" style="overflow: hidden;"">
            <div class="penyakit">
                <div class="col text-center" style="display: flex; justify-content: center;">
                    <span
                        style="padding: 8px 20px; background: rgb(255, 0, 234); color: white; font-size: 16px; font-weight: bold; border: 2p solid white; border-radius: 5%; display: block; max-width: fit-content;">
                        {{ $disease['disease'] }}
                    </span>
                </div>
            </div>

            <div class="row mx-3 mt-5" style="margin: 20px;">
                <div class="col-md-6" style="padding: 20px;">
                    <div class="keterangan"
                        style="background: rgb(236, 88, 179); padding: 10px; border-radius: 10px; border: 1px solid red; color: white;">
                        {{ $disease['description'] }}
                    </div>
                    <div class="keterangan"
                        style="background: rgba(158, 32, 255, 0.333); padding: 10px; margin-top: 20px; border-radius: 10px; border: 1px solid rgb(51, 0, 255); color: white;">
                        {{ $disease['suggestion'] }}
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas id="myChart"></canvas>

                    <div class="sty">
                        <a href="{{ route('print') }}" class="btn btn-primary">Cetak Hasil</a>
                        <a href="{{ route('diagnosa') }}" class="btn btn-primary">Diagnosa lagi?</a>
                        <a href="{{ route('diagnosa') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan class table-responsive untuk scrollable jika diperlukan -->
            {{-- <div class="table-responsive">

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
            </div><!-- /.table-responsive --> --}}
        </div><!-- /.box-body -->
    </div>
    <!-- /.box -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        const labels = @json($labels);
        const data = @json($values);
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                    label: 'Certainty of Disease',
                    data,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-dashboard-layout>
