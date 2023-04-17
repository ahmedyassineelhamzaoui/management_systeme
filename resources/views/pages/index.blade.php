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
                
                @if(session('name'))
                    <h1 class="mt-2 ml-2">Welcome <span class="text-blue-800 "> {{session('name')}} </span> in your space </h1>
                @endif
           
                <div class="insights">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>78,009$</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>75%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <!-- end of sales -->
                    <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Express</h3>
                                <h1>20,343$</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>53%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <div class="sales">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Income</h3>
                                <h1>46,632$</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>33%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                    <div class="income">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>78,009$</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>75%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            last 24 Hours
                        </small>
                    </div>
                </div>
                
            </section>
        </main>
    </div>
@include('layouts.dashboardFooter')