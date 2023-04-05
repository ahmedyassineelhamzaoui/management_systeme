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
                <div class="date">
                    <input type="date" >
                </div>
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
                <div class="tables-content mt-10 mb-4 px-2">
                    <div>
                        <div class="add-bottons mt-10">
                            <button class="border-dashed px-4 py-3 mb-2 rounded-md border-2 text-green-800  border-green-700  flex items-center">
                                <p class="mr-2 text-black">
                                    Ajouter un role 
                                </p>
                                <span >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </button>
                            <button class="border-dashed  px-4 py-3 mb-2 rounded-md border-2 text-green-800  border-green-700  flex items-center">
                                <p class="mr-2 text-black">
                                    Ajouter un utilisateur
                                </p>
                                <span >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray uppercase table-bg ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nom
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Permession
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-body-bg">
                                    <tr class="border-b text-tablecolor">
                                        <th scope="row" class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            comercial
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <span class="text-green-500 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>                                                      
                                                </span>
                                                <span class="text-red-600 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                      </svg>                                                      
                                                </span>
                                            </div>
                                        </td>                                        
                                    </tr>                                 
                                </tbody>
                            </table>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray uppercase table-bg ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nom
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Role
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th>
                                            Statut
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-body-bg">
                                    <tr class="border-b text-tablecolor ">
                                        <th scope="row" class="px-6 py-4   whitespace-nowrap ">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            comercial
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop
                                        </td>
                                        <td class="px-6 py-4">
                                            example@gmail.com
                                        </td>
                                        <td>
                                            ofline
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <span class="text-green-500 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>                                                      
                                                </span>
                                                <span class="text-red-600 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                      </svg>                                                      
                                                </span>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr class="border-b text-tablecolor ">
                                        <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Administrateur
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop PC
                                        </td>
                                        <td class="px-6 py-4">
                                            exemple@gmail.com
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <span class="text-green-500 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>                                                      
                                                </span>
                                                <span class="text-red-600 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                      </svg>                                                      
                                                </span>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="p-5  border border-gray-100 shadow-md  rounded-lg notification-color">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <h2 class="mr-2 ">Notification</h2>
                                <span class="text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                    </svg>   
                                </span>                           
                            </div>
                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                <span class="relative font-bold px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    show All
                                </span>
                            </button>
                        </div>
                        <ol class="mt-3 divide-y ">
                            <li>
                                <a href="#" class="items-center block p-3 sm:flex">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="images/logo.png" />
                                    <div class="">
                                        <div class="text-base font-normal"><span class="font-medium">Laura Romeros likes Bonnie Green's post in  How to start with Flowbite library</span></div>                                        
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="items-center block p-3 sm:flex">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="images/logo.png" />
                                    <div class="">
                                        <div class="text-base font-normal"><span class="font-medium">Laura Romeros likes Bonnie Green's post in  How to start with Flowbite library</span></div>                                        
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="items-center block p-3 sm:flex">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="images/logo.png" />
                                    <div class="">
                                        <div class="text-base font-normal"><span class="font-medium">Laura Romeros likes Bonnie Green's post in  How to start with Flowbite library</span></div>                                        
                                    </div>
                                </a>
                                
                            </li>
                            <li>
                                <a href="#" class="items-center block p-3 sm:flex">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="images/logo.png" />
                                    <div class="">
                                        <div class="text-base font-normal"><span class="font-medium">Laura Romeros likes Bonnie Green's post in  How to start with Flowbite library</span></div>                                        
                                    </div>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
@include('layouts.dashboardFooter')