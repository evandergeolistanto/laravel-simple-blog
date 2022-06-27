<div class="navbar bg-primary text-primary-content">
  <div class="navbar-start">
    <div class="dropdown text-slate-700">
      <label tabindex="0" class="btn btn-ghost lg:hidden ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Home</a></li>
        <li><a>About</a></li>
        <li><a>Blog</a></li>
        <li><a>Categories</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl" href="/"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
    </svg>BETANG CODER</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal p-0">
      <li><a class="nav-link  {{ ($active === "home") ? 'active' : '' }} " href="/">Home</a></li>
      <li><a class="nav-link {{ ($active === "about") ? 'active' : '' }} " href="/about">About</a></li>
      <li><a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a></li>
      <li><a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a></li>
  </ul>
  
</div>
<div class="navbar-end">
    <ul class="navbar-nav ms-auto">
      @auth()
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost rounded-btn">Hi, {{ Auth::user()->name }}</label>
        <ul tabindex="0" class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4 ">
          <li><a class="hover:bg-primary text-slate-700 hover:text-white" href="/dashboard">My Dashboard</a></li> 
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="text-slate-700"><i class="bi bi-box-arrow-right"></i>Logout</button>
            </form>
        </li>
        </ul>
      </div>
      @else
      <li class="nav-item">
        <a href="/login" class="btn {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
      </li>
      @endauth
    </ul>
  </div>
</div>