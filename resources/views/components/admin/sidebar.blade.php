<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ auth()->user()->name }}</p>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        @if (auth()->user()->role == 'patient')
            <li class="header">DASHBOARD PASIEN</li>
            <li class="{{ Route::currentRouteName() == 'diagnosa' ? 'active' : '' }}">
                <a href="{{ route('diagnosa') }}">
                    <i class="fa fa-th"></i> <span>Diagnosa</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'hasil' ? 'active' : '' }}">
                <a href="{{ route('hasil') }}">
                    <i class="fa fa-th"></i> <span>Hasil</span>
                </a>
            </li>\
            <li class="">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-th"></i> <span>Keluar</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <li class="header">DASHBOARD ADMIN</li>
            <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'symptom.index' ? 'active' : '' }}">
                <a href="{{ route('symptom.index') }}">
                    <i class="fa fa-th"></i> <span>Data Gejala</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'disease.index' ? 'active' : '' }}">
                <a href="{{ route('disease.index') }}">
                    <i class="fa fa-th"></i> <span>Data Penyakit</span>
                </a>
            </li>
        @endif
    </ul>
</section>
