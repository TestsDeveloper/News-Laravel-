
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link text-decoration-none">
      <span class="brand-text font-weight-light p-3" >Bultin News <i class="fa-regular px-1 fa-newspaper"></i></span>
    </a>
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ route("admin#profile",auth()->user()->id) }}" class="nav-link">
            <i class="fas fa-user-circle"></i>
            <p>
              My Profile
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("admin#list") }}" class="nav-link">
            <i class="fa-solid fa-people-group"></i>
            <p>
              Admin List
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("category#list") }}" class="nav-link">
            <i class="fas fa-list"></i>
            <p>
              Category
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("new#postList") }}" class="nav-link">
            <i class="fa-regular fa-newspaper"></i>
            <p>
              News
            </p>
          </a>
        </li>

      <li class="nav-item">
          <a href="{{ route("user#list") }}" class="nav-link">
          <i class="fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("contact#list") }}" class="nav-link">
            <i class="fa-regular fa-paper-plane"></i>
            <p>
              Contact
            </p>
          </a>
        </li>

        <li class="nav-item">
          <form action="{{ route("logout") }}" method="POST" class="nav-link">
            @csrf
            <i class="fas fa-sign-out-alt"></i>
            <p><input type="submit" value="Logout" class="btn btn-sm btn-outline text-white"></p>
        </form>
        </li>
      </ul>
    </div>
  </aside>
