<!DOCTYPE html>
<html>

<head>
    <x-admin.style />
</head>

<body style="background: #ededed;">
    <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center; height: 90vh;">
            <div class="col-md-4 col-sm-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Welcome To Sistem Pakar</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3"
                                        placeholder="Email">
                                    @error('email')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3"
                                        placeholder="Password">
                                    @error('password')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Sign in</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>

    </div><!-- ./wrapper -->

    <x-admin.script />
</body>

</html>
