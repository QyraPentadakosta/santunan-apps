<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">

        @if (Auth::user()->roles == 'admin')
            <li>
                <a href="{{url('')}}/admin" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Dashboards</span>
                </a>
            </li>

            <li>
                <a href="{{url('')}}/admin/anggota" class="waves-effect">
                    <i class="bx bx-user"></i>
                    <span key="t-layouts">Data Anggota</span>
                </a>
            </li>

            <li>
                <a href="{{url('')}}/admin/iuran" class="waves-effect">
                    <i class="bx bx-food-menu"></i>
                    <span key="t-dashboards">Data Iuran</span>
                </a>
            </li>

            <li>
                <a href="{{url('')}}/admin/pengajuan" class="waves-effect">
                    <i class="bx bx-id-card"></i>
                    <span key="t-chat">Data Pengajuan</span>
                </a>
            </li>
        @endif

        {{-- user --}}
        @if (Auth::user()->roles == 'user')
            <li>
                <a href="{{url('')}}/user" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Dashboards</span>
                </a>
            </li>
            <li>
                <a href="{{url('')}}/user/tambah-pengajuan" class="waves-effect">
                    <i class="bx bx-id-card"></i>
                    <span key="t-chat">Tambah Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="{{url('')}}/user/pengajuan" class="waves-effect">
                    <i class="bx bx-id-card"></i>
                    <span key="t-chat">Cek Pengajuan</span>
                </a>
            </li>
        @endif

    </ul>
</div>
