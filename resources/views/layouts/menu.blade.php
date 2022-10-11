<li class="nav-item">
    <a href="{{ route('arsips.index') }}"
        class="nav-link {{ Request::is('*') && Route::current()->getName() != 'abouts.index' ? 'active' : '' }}">
        <i class="fas fa-folder-open"></i>
        <p>Arsips</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('abouts.index') }}" class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <i class="fas fa-user"></i>
        <p>About</p>
    </a>
</li>
