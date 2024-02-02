<li class="nav-item">
    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">
        Home
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ url('/products') }}">Products</a>
</li>
