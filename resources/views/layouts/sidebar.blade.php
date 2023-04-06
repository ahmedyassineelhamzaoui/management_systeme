<aside id="aside-bar">
    <div class="top">
        <div class="logo">
            <img src="images/logo.png" alt="siaf">
            <h2 class="">Siaf</h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
    </div>
    <div id="tow-opttions" class="double-sens">
        <span class="material-icons-sharp right-icon">
            keyboard_double_arrow_right
        </span>
        <span class="material-icons-sharp left-icon">
            keyboard_double_arrow_left
        </span>
    </div>
    <div class="sidebar">
        <a href="{{url('index')}}" class="my-pagesSidebar active" >
            <span class="material-icons-sharp">dashboard</span>
            <h3 class="hedding-h3">tableau de bord</h3>
        </a>
        @can('user-list')
        <a href="{{url('users')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">group</span>
            <h3 class="hedding-h3">Utilisateurs</h3>
        </a>
        @endcan
        <a href="{{url('products')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">inventory</span>
            <h3 class="hedding-h3">Produits</h3>
        </a>
        @can('categorie-list')
        <a href="{{url('categories')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">keyboard_command_key</span>
            <h3 class="hedding-h3">catégories</h3>
        </a>
        @endcan
        <a href="{{url('brand')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">branding_watermark</span>
            <h3 class="hedding-h3">Marques</h3>
        </a>
        <a href="#" class="my-pagesSidebar">
            <span class="material-icons-sharp">list_alt</span>
            <h3 class="hedding-h3">Commandes</h3>
        </a>
        @can('role-list')
        <a href="{{url('roles')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">admin_panel_settings</span>
            <h3 class="hedding-h3">Rôles</h3>
        </a>
        @endcan
        <a href="{{route('logout')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">logout</span>
            <h3 class="hedding-h3">déconnexion</h3>
        </a>
    </div>
</aside>