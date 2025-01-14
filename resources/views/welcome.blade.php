<!DOCTYPE html>
<html lang="en">

<head>
    <x-admin.style />
    <style>
        body {
            background: linear-gradient(135deg, #f9f3f2, #ffe6e8);
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;

        }

        .box-header {
            background: linear-gradient(135deg, #ff8fa3, #ffb6c1);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .box-title {
            font-size: 24px;
            font-weight: bold;
        }

        .box-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #ff8fa3;
            box-shadow: 0 0 5px rgba(255, 143, 163, 0.5);
        }

        .btn {
            background: #ff8fa3;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ff667c;
        }

        small {
            font-size: 12px;
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center" style="width: 100%;">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Selamat Datang di Klinik Kecantikan</h3>
                    </div>
                    <div class="box-body">
                        <div class="row d-flex" style="display: flex; align-items: center;">
                            <div class="col-md-12">
                                <div style="width: 290px; height: 290px; border-radius: 290px; overflow: hidden;">
                                    <img src="https://img.freepik.com/free-photo/brunette-girl-posing-with-carnation_23-2148136087.jpg?t=st=1735646280~exp=1735649880~hmac=90c0c713c9519ba29befc972f9e6d63115a11577ab33b22594b21ca0b7b481be&w=740"
                                        style="width: 100%; height: 100%; object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-12"
                                style="display: flex; flex-direction: column; align-items: center; gap: 10px;">
                                <div style="width: 100%; display: flex; justify-content: end;">
                                    <a href="" class="btn btn-primary">Login</a>
                                </div>
                                <div style="width: 100px; height: 100px; border-radius: 100px; overflow: hidden; ">
                                    <img src="https://img.freepik.com/free-photo/brunette-girl-posing-with-carnation_23-2148136087.jpg?t=st=1735646280~exp=1735649880~hmac=90c0c713c9519ba29befc972f9e6d63115a11577ab33b22594b21ca0b7b481be&w=740"
                                        style="width: 100%; height: 100%; object-fit: cover;" alt="">
                                </div>

                                <div
                                    style="display: flex; flex-direction: column; align-items: center; gap: 10px; width: 100%; padding: 20px; border-radius: 10px; border:1px solid rgba(255, 143, 163, 0.5);">
                                    <h1 class="text-center">Sistem Pakar Mendiagnosa Penyakit Wajah</h1>
                                    <a href="{{ route('diagnosa') }}" class="button"
                                        style=" display: block; max-width: fit-content;">MULAI
                                        DIAGNOSA!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-admin.script />
</body>

</html>
