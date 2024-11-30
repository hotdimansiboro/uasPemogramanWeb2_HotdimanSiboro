<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    {{-- <li class="nav-item">
      <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $page_title == 'Dashboard' ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li> --}}
    <li class="nav-item">
      <a href="{{ url('/') }}" class="nav-link {{ $page_title == 'Dashboard' ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>

    <li class="nav-item {{ $page_title == 'List Periode Akademik' || $page_title == 'Create Periode Akademik' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'List Periode Akademik' || $page_title == 'Create Periode Akademik' ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>Tahun Akademik<i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'List Periode Akademik' ? 'menu-open' : '' }}">
          <a href="{{ url('periode') }}" class="nav-link {{ $page_title == 'List Periode Akademik' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;" ></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Periode Akademik' ? 'menu-open' : '' }}">
          <a href="{{ url('periode/create') }}"
            class="nav-link {{ $page_title == 'Create Periode Akademik' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item {{ $page_title == 'List Fakultas' || $page_title == 'Create Fakultas' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'List Fakultas' || $page_title == 'Create Fakultas' ? 'active' : '' }}">
        <i class="nav-icon fas fa-landmark"></i>
        <p>Fakultas<i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'List Fakultas' ? 'menu-open' : '' }}">
          <a href="{{ url('fakultas') }}" class="nav-link {{ $page_title == 'List Fakultas' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;" ></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Fakultas' ? 'menu-open' : '' }}">
          <a href="{{ url('fakultas/create') }}"
            class="nav-link {{ $page_title == 'Create Fakultas' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item {{ $page_title == 'List Mata Kuliah' || $page_title == 'Create Mata Kuliah' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'List Mata Kuliah' || $page_title == 'Create Mata Kuliah' ? 'active' : '' }}">
        <i class="nav-icon fas fa-book-open"></i>
        <p>Mata Kuliah<i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'List Mata Kuliah' ? 'menu-open' : '' }}">
          <a href="{{ url('mata-kuliah') }}" class="nav-link {{ $page_title == 'List Mata Kuliah' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;" ></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Mata Kuliah' ? 'menu-open' : '' }}">
          <a href="{{ url('mata-kuliah/create') }}"
            class="nav-link {{ $page_title == 'Create Mata Kuliah' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item {{ $page_title == 'List Dosen' || $page_title == 'Create Dosen' || $page_title == 'Detail Dosen' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'List Dosen' || $page_title == 'Create Dosen' || $page_title == 'Detail Dosen' ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>Dosen<i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'List Dosen' ? 'menu-open' : '' }}">
          <a href="{{ url('dosen') }}" class="nav-link {{ $page_title == 'List Dosen' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;" ></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Dosen' ? 'menu-open' : '' }}">
          <a href="{{ url('dosen/create') }}"
            class="nav-link {{ $page_title == 'Create Dosen' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>


    <li class="nav-item {{ $page_title == 'List Mahasiswa' || $page_title == 'Create Mahasiswa' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'List Mahasiswa' || $page_title == 'Create Mahasiswa' ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p> Mahasiswa <i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'List Mahasiswa' ? 'menu-open' : '' }}">
          <a href="{{ url('mahasiswa') }}" class="nav-link {{ $page_title == 'List Mahasiswa' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;" ></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Mahasiswa' ? 'menu-open' : '' }}">
          <a href="{{ url('mahasiswa/create') }}"
            class="nav-link {{ $page_title == 'Create Mahasiswa' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
