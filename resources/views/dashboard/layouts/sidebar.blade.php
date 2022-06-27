

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="menu bg-base-100 w-56 p-2 rounded-box">
        <li>
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
          Dashboard
          </a>
        </li>
        <li>
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Posts
          </a>
        </li>
        @can('admin')
        <hr>
        <li>
          <span class="font-semibold">Administrator</span>
        </li>
        <li>
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Categories
          </a>
        </li>
        @endcan
      </ul>
    </div>
</nav>