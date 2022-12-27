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
                <a class="nav-link {{ Request::is('home/balitas') ? 'active' : '' }}" href="/home/balitas">
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
                <a class="nav-link {{ Request::is('home/ibuhamils') ? 'active' : '' }}" href="/home/ibuhamils">
                    <img src="{{ asset('image/3.png') }}" style="width: 18px; height: auto;" alt="">
                    Pendaftaran Ibu Hamil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/balitas') ? 'active' : '' }}" href="/home/balitas">
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
                <a class="nav-link {{ Request::is('home/jadwals') ? 'active' : '' }}" href="/home/jadwals">
                    <span data-feather="calendar"></span>
                    Jadwal
                </a>
            </li>
        </ul>
    </div>
</nav>