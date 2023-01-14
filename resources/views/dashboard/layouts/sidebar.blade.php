@if (\Illuminate\Support\Facades\Auth::check())
@if (\Illuminate\Support\Facades\Auth::user()->type == 'user')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
                    <span data-feather="home"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <style="width: 18px; height: auto;" alt="">
                        Balita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/balitas') ? 'active' : '' }}" href="/home/balitas">
                    <img src="{{ asset('image/2.png') }}" style="width: 18px; height: auto;" alt="">
                    Pendaftaran Balita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/historibalita') ? 'active' : '' }}" href="/lihat-pemeriksaan">
                    <img src="{{ asset('image/5.png') }}" style="width: 18px; height: auto;" alt="">
                    History Pemeriksaan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <style="width: 18px; height: auto;" alt="">
                        Ibu Hamil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/ibuhamils') ? 'active' : '' }}" href="/ibuhamils">
                    <img src="{{ asset('image/3.png') }}" style="width: 18px; height: auto;" alt="">
                    Pendaftaran Ibu Hamil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/Historyibuhamil') ? 'active' : '' }}" href="/home/historiibuhamil">
                    <img src="{{ asset('image/5.png') }}" style="width: 18px; height: auto;" alt="">
                    History Pemeriksaan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <style="width: 18px; height: auto;" alt="">
                        Penjadwalan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/jadwals') ? 'active' : '' }}" href="/jadwal">
                    <span data-feather="calendar"></span>
                    Jadwal
                </a>
            </li>
        </ul>
    </div>
</nav>
@elseif(\Illuminate\Support\Facades\Auth::user()->type == 'admin')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}" aria-current="page" href="/admin/home">
                    <span data-feather="home"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <style="width: 18px; height: auto;" alt="">
                        Balita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-balita') ? 'active' : '' }}" href="/daftar-balita">
                    <img src="{{ asset('image/2.png') }}" style="width: 18px; height: auto;" alt="">
                    Daftar Balita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pemeriksaan-balita') ? 'active' : '' }}" href="/pemeriksaan-balita">
                    <img src="{{ asset('image/2.png') }}" style="width: 18px; height: auto;" alt="">
                    Pemeriksaan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <style="width: 18px; height: auto;" alt="">
                        Penjadwalan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/jadwals') ? 'active' : '' }}" href="/home/jadwals">
                    <span data-feather="calendar"></span>
                    Jadwal
                </a>
            </li>
        </ul>
    </div>
</nav>
@endif
@endif