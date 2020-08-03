<div class="main-sidebar">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <img src="{{ asset('assets/img/logo/asli-smd-logo-colour.png')}}" alt="logo" width="150px" height="70px" class="mt-4">
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">AS</a>
    </div>
    <ul class="sidebar-menu mt-5">
        <li class="menu-header">Dashboard</li>
        <li class="active">
            <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fire"></i> 
            <span>Dashboard</span>
        </a>
        </li>
        
        <li class="menu-header">Main</li>

        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Posting</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('post.index') }}">List Postingan</a></li>
            <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">List Postingan Dihapus</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard"></i> <span>Kategori</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bookmark"></i> <span>Tag</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Users</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
        </ul>
        </li>

</aside>
</div>