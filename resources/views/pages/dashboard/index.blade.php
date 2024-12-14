<x-dashboard-layout>
    <div class="container">
        <div class="row" style="margin-top: 90px; display: flex; justify-content: space-evenly;">
            <div class="col-md-4">
                <div
                    style="background: white; border-radius: 10px; padding: 40px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="width: 150px; height: 150px; border-radius: 100%; background: gray;"></div>
                    <h2 style="text-align: center;">
                        Jumlah Penyakit
                    </h2>
                    <a href="{{ route('disease.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    style="background: white; border-radius: 10px; padding: 40px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="width: 150px; height: 150px; border-radius: 100%; background: gray;"></div>
                    <h2 style="text-align: center;">
                        Jumlah Gejala
                    </h2>
                    <a href="{{ route('symptom.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div><!-- /.box -->
</x-dashboard-layout>
