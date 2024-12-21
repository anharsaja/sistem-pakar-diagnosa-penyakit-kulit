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
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Selamat Datang di Klinik Kecantikan</h3>
                    </div>
                    <form class="form-horizontal" style="padding: 20px;" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail3"
                                    placeholder="Masukkan Email">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword3"
                                    placeholder="Masukkan Password">
                                @error('password')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="box-footer text-center">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-admin.script />
</body>

</html>
