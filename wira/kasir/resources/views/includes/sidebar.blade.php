 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset("assets/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("assets/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
        
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link {{ request()->is('category*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link {{ request()->is('product*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('transaction-product') }}" class="nav-link {{ request()->is('transaction-product*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaction
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('transaction-detail.index') }}" class="nav-link {{ request()->is('transaction-detail') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaction Detail
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>