<x-dashboard-layout>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Diagnosa</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <!-- Tambahkan class table-responsive untuk scrollable jika diperlukan -->
            <div class="table-responsive">
                <form action="{{ route('diagnosa') }}" method="post">
                    @csrf
                    <table id="example" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Pilih</th>
                                <th>Kode Gejala</th>
                                <th>Nama Gejala</th>
                                <th>Nilai Pakar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($symptoms as $symptom)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="symptoms[]" value="{{ $symptom->id }}"
                                            id="symptom-{{ $symptom->id }}">
                                    </td>
                                    <td>{{ $symptom->code }}</td>
                                    <td>{{ $symptom->name }}</td>
                                    <td>
                                        <select id="cf-{{ $symptom->id }}" name="value[]" class="form-control"
                                            disabled>
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
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4"></th>
                                <th>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Proses</button>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
    </div><!-- /.box -->


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Ambil semua checkbox
            const checkboxes = document.querySelectorAll('input[type="checkbox"][name="symptoms[]"]');

            // Tambahkan event listener ke setiap checkbox
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Cari select yang terkait dengan checkbox ini
                    const symptomId = this.id.split('-')[1]; // Mendapatkan ID dari checkbox
                    const select = document.getElementById(`cf-${symptomId}`);

                    // Toggle disable pada select berdasarkan checkbox
                    if (this.checked) {
                        select.disabled = false;
                    } else {
                        select.disabled = true;
                        select.value = "0"; // Reset value jika tidak dipilih
                    }
                });

                // Atur default: Disable semua select saat halaman dimuat
                const symptomId = checkbox.id.split('-')[1];
                const select = document.getElementById(`cf-${symptomId}`);
                select.disabled = !checkbox.checked;
            });
        });
    </script>
</x-dashboard-layout>
