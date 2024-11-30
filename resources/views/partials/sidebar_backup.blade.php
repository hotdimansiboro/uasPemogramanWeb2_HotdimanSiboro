<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $page_title == 'Dashboard' ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item {{ $page_title == 'Users' || $page_title == 'Create Users' ? 'menu-open' : '' }}">
      <a href="#" class="nav-link {{ $page_title == 'Users' || $page_title == 'Create Users' ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p> Users <i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'Users' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/users') }}" class="nav-link {{ $page_title == 'Users' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;"></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Create Users' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/users/create') }}"
            class="nav-link {{ $page_title == 'Create Users' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item {{ $page_title == 'Categories' || $page_title == 'Create Categories' ? 'menu-open' : '' }}">
      <a href="#"
        class="nav-link {{ $page_title == 'Categories' || $page_title == 'Create Categories' ? 'active' : '' }}">
        <i class="nav-icon fab fa-squarespace"></i>
        <p> Categories <i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'Categories' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/categories') }}" class="nav-link {{ $page_title == 'Categories' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;"></i>
            <p>List</p>
          </a>
        </li>
        <li
          class="nav-item {{ $page_title == 'Categories' || $page_title == 'Create Categories' ? 'menu-open' : '' }}">
          <a href="{{ url('admin/categories/create') }}"
            class="nav-link {{ $page_title == 'Create Categories' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item {{ $page_title == 'Tags' || $page_title == 'Create Tags' ? 'menu-open' : '' }}">
      <a href="" class="nav-link {{ $page_title == 'Tags' || $page_title == 'Create Tags' ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Tags <i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'Tags' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/tags') }}" class="nav-link {{ $page_title == 'Tags' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;"></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Tags' || $page_title == 'Create Tags' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/tags/create') }}"
            class="nav-link {{ $page_title == 'Create Tags' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item {{ $page_title == 'Blogs' || $page_title == 'Create Blogs' ? 'menu-open' : '' }}">
      <a href="" class="nav-link {{ $page_title == 'Blogs' || $page_title == 'Create Blogs' ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Blogs <i class="right fas fa-angle-left"></i> </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item {{ $page_title == 'Blogs' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/blogs') }}" class="nav-link {{ $page_title == 'Blogs' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #00ffe5;"></i>
            <p>List</p>
          </a>
        </li>
        <li class="nav-item {{ $page_title == 'Blogs' || $page_title == 'Create Blogs' ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/blogs/create') }}"
            class="nav-link {{ $page_title == 'Create Blogs' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon" style="color: #43df00;"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
