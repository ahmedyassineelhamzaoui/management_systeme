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
        <li class=" flex justify-between px-8 text-gray-500 cursor-pointer my-3">
            <div class="flex">
                <span class="material-icons-sharp">receipt_long</span>
                <h3 class="hedding-h3 ml-2">Produits</h3>  
            </div>
            <div>
                <span class="hideProducts-list hidden"><svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg></span>
                <span class="products-list"><svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
            </div>
        </li>
        <div class="product-dropDown  hidden pl-2">
            <a href="{{url('products')}}" class="my-pagesSidebar ">  
                    <span class="material-icons-sharp">inventory</span>
                    <h3 class="hedding-h3">Stock Principale</h3>  
            </a>
            @foreach ($comercials as $key => $comercial)
                <a href="Stock/{{$comercial->name}}" class="my-pagesSidebar ">     
                    <span class="rounded-full w-[1em] h-[1em]  border-2 border-gray-400 flex items-center justify-center"><p class="text-gray-400 font-bold">{{$key + 1}}</p></span>  
                    <h3 class="hedding-h3">
                        @if(auth()->user()->roles[0]->name == 'admin' || auth()->user()->roles[0]->name == 'user' || (auth()->user()->roles[0]->name == 'commercial' && auth()->user()->name != $comercial->name) )
                        {{$comercial->name}} Stock
                        @else
                        Mon Stock
                        @endif
                    </h3>  
                </a> 
            @endforeach     
        </div>
        
        @can('categorie-list')
        <a href="{{url('categories')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">keyboard_command_key</span>
            <h3 class="hedding-h3">catégories</h3>
        </a>
        @endcan
        @can('marque-list')
        <a href="{{url('brand')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">branding_watermark</span>
            <h3 class="hedding-h3">Marques</h3>
        </a>
        @endcan
        <a href="{{url('notifications')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">notifications</span>
            <h3 class="hedding-h3">Notifications</h3>
        </a>
        <a href="{{url('Commande')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">list_alt</span>
            <h3 class="hedding-h3">Commandes</h3>
        </a>
        @can('role-list')
        <a href="{{url('roles')}}" class="my-pagesSidebar">
            <span class="material-icons-sharp">admin_panel_settings</span>
            <h3 class="hedding-h3">Rôles</h3>
        </a>
        @endcan
    </div>
</aside>