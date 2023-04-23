@include('layouts.dashboardHeader')
    <div class="page-content">
        <!------------------------------------- BEGIN of ASIDE ---------------------------------->
        @include('layouts.sidebar')
        <!------------------------------------- END of ASIDE ---------------------------------->
        <!------------------------------------- BEGIN of NAVBAR ---------------------------------->
        @include('layouts.dashboardNav')
        <!------------------------------------- END of NAVBAR ---------------------------------->
        
        <main id="main-page"> 
            <section id="my-section ">     
                <h1 class="mt-2 ml-4 welcome-space">Bienvenue <span class="text-blue-600 "> {{auth()->user()->name}} </span> dans votre espace </h1>           
                @role('admin')
                <div class="insights ml-2">
                    <div class="sales">
                        <span class="material-icons-sharp bg-gray-400 text-blue-800 ">
                            shopping_cart
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Produits</h3>
                                <h2 class="font-bold">{{$total_product}}</h2>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <!-- end of sales -->
                    <div class="expenses">
                        <span class="material-icons-sharp text-red-900 ">
                            receipt_long
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Commandes</h3>
                                <h2 class="font-bold">{{$total_commande}}</h2>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <div class="sales">
                        <span class="material-icons-sharp bg-yellow-500 text-green-800">
                            payments
                        </span>
                        <div class="middle">
                            <div class="left ">
                                <h3>Total Prix</h3>
                                <h2 class="font-bold">{{$total_Price}} dh</h2>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <div class="income">
                        <span class="material-icons-sharp bg-blue-600 ">                               
                             trending_up
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>produit tendance</h3>
                                <h2 class="font-bold">{{$max_product_name}}</h2>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                </div>
                @endrole
                <div class="flex flex-col md:flex-row gap-1 mt-4 mb-4 ml-2">
                    <div class="table-body-bg w-full md:w-5/12  md:h-auto border-2  bg-white  ">
                        <h3 class="mt-2 ml-2 font-bold">le totale des ventes par commercial</h3>
                         <div class="flex items-center justify-center">
                         <div class="w-3/4 h-3/4">
                            {{ $chartjs2->render() }}
                         </div>
                        </div>
                    </div>
                    <div class="table-body-bg w-full md:w-7/12 md:h-auto border-2  bg-white ">
                        
                        {!! $chartjs->render() !!}
                    </div>
                </div>
                <div class="mt-2">
                    @if($check_user)
                    @foreach ($commercials as $i => $item)
                    <h2 class="font-bold ml-2 text-blue-600">le commercial  {{$item->name}}</h2>
                    <div class="insights ml-2 mb-2">
                        <div class="sales">
                            <span class="material-icons-sharp bg-gray-400 text-blue-800 ">
                                shopping_cart
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Produits</h3>
                                    <h2 class="font-bold">{{$stockProduct[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <!-- end of sales -->
                        <div class="expenses">
                            <span class="material-icons-sharp text-red-900 ">
                                receipt_long
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Commandes</h3>
                                    <h2 class="font-bold">{{$commandes[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <div class="sales">
                            <span class="material-icons-sharp bg-yellow-500 text-green-800">
                                payments
                            </span>
                            <div class="middle">
                                <div class="left ">
                                    <h3>Total Prix</h3>
                                    <h2 class="font-bold">{{$price[$i]}} dh</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <div class="income">
                            <span class="material-icons-sharp bg-blue-600 ">
                                trending_up
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Produit tendance</h3>
                                    <h2 class="font-bold">{{$tendances[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                    </div>
                    @endforeach                        
                    @else
                    @foreach ($commercials as $i => $item)
                    @if($item->name == auth()->user()->name)
                    <h2 class="font-bold ml-2 text-blue-600">Mes Statistiques   </h2>
                    <div class="insights ml-2 mb-2">
                        <div class="sales">
                            <span class="material-icons-sharp bg-gray-400 text-blue-800 ">
                                shopping_cart
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Produits</h3>
                                    <h2 class="font-bold">{{$stockProduct[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <!-- end of sales -->
                        <div class="expenses">
                            <span class="material-icons-sharp text-red-900 ">
                                receipt_long
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Commandes</h3>
                                    <h2 class="font-bold">{{$commandes[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <div class="sales">
                            <span class="material-icons-sharp bg-yellow-500 text-green-800">
                                payments
                            </span>
                            <div class="middle">
                                <div class="left ">
                                    <h3>Total Prix</h3>
                                    <h2 class="font-bold">{{$price[$i]}} dh</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                        <div class="income">
                            <span class="material-icons-sharp bg-blue-600 ">
                                trending_up
                            </span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Produit tendance</h3>
                                    <h2 class="font-bold">{{$tendances[$i]}}</h2>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                    </svg>
                                    <div class="number">
                                        <p>100%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">
                                last 24 Hours
                            </small>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@include('layouts.dashboardFooter')