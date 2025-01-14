<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Kulit Wajah</title>
    <style>
        @media print {

            .printable-area,
            .printable-area * {
                visibility: visible;
            }

            .printable-area {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        body {
            background: linear-gradient(135deg, #f9f3f2, #ffe6e8);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #ff8fa3;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .circle {
            width: 100px;
            height: 100px;
            background-color: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .circle img {
            max-width: 70%;
            max-height: 70%;
        }

        .content {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
        }

        .content h2 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }

        .button {
            background: #ff8fa3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s;
            cursor: pointer;
        }

        .button:hover {
            background: #ff667c;
        }

        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #fff;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .login-button:hover {
            background: #f0f0f0;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ff8fa3;
            color: white;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="header">Diagnosa penyakit pada kulit wajah anda</div>

    <div class="container">
        <div class="table-container">
            <h3>Hasil Diagnosa</h3>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Penyakit</th>
                            <th>Keyakinan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh Data Diagnosa -->
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
            </div>
        </div>

        <div class="table-container">
            <h3>Gejala Dipilih</h3>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Gejala</th>
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
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.print();
    });
</script>

</html>
