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
                
                <div class="insights ml-2">
                    <div class="sales">
                        <span class="material-icons-sharp bg-gray-400">
                            shopping_cart
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Produits</h3>
                                <h1>{{$total_product}}</h1>
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
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Commandes</h3>
                                <h1>{{$total_commande}}</h1>
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
                        <span class="material-icons-sharp bg-yellow-500">
                            payments
                        </span>
                        <div class="middle">
                            <div class="left ">
                                <h3>Total Prix</h3>
                                <h1>{{$total_Price}} dh</h1>
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
                        <span class="material-icons-sharp bg-blue-600">key</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Permissions</h3>
                                <h1>{{$total_permissions}}</h1>
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
                    <div class="flex flex-col md:flex-row gap-1 mt-4 mb-4 ml-2">
                        <div class="w-full md:w-5/12 h-64 md:h-auto border-2  bg-white  ">
                            <div style="width:80%">
                              {{ $chartjs2->render() }}
                            </div>
                        </div>
                        <div class="w-full md:w-7/12 h-64 md:h-auto border-2  bg-white ">
                            {!! $chartjs->render() !!}
                        </div>
                    </div>
                
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@include('layouts.dashboardFooter')