<nav class="nav">
    <div class="dashboard-name">
        <h1>Dashboard</h1>
        <span id="show-menu" class="material-icons-sharp menu">
            menu
        </span>
    </div>
    <div class="right-nav">
        <div class="mr-2">
            <div class="relative">
            @if(auth()->user()->unreadNotifications->count()>0) 
            <div class="notification">
                <span class="notification-blink "></span>
            </div>
            @endif
            <span id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="button-operation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>    
            </span>
            </div>
                <div id="dropdownHover" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow  w-11/12 sm:w-96">
                    <ul class="text-sm " aria-labelledby="dropdownHoverButton">
                    <div class="text-lg  bg-blue-600 ">
                        <div class="flex items-center justify-between px-4 pt-2">
                        <p class="text-white font-bold pt-2"> Notifications </p>
                        <a href="MarqueAsread" class="bg-yellow-500 txet-black text-sm font-bold rounded-lg py-2 px-4">
                            Marquer Comme lu
                        </a>
                        </div>
                        <p class="text-white text-sm pl-4 py-2">vous avez <span class="font-bold"> {{ auth()->user()->unreadNotifications->count()}}</span> notifcations non lu</p>
                    </div>
                    @foreach (auth()->user()->unreadNotifications()->orderBy('created_at', 'desc')->take(4)->get()  as $notification)
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 "><img class="w-6 h-6 mr-1"  alt=""><span >{{$notification}} {{ $notification}}</span></a>
                    </li>
                    @endforeach
                    <li>
                        <a href="notifications" class="hover:bg-gray-100 hover:text-blue-600 block px-4 py-2 text-center text-blue-700 ">Voir tout</a>
                    </li>
                    </ul>
                </div>   
        </div>
        <div class="theme-mode">
            <span class="material-icons-sharp activeTo">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        <div class="conected">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">{{auth()->user()->name}}<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden divide-y  rounded-b-lg shadow w-44 ">
                <ul class="py-2 text-sm " aria-labelledby="dropdownDefaultButton">
                <li>
                    <button id="toggleModalButton" data-modal-target="staticModal" data-modal-toggle="staticModal" class="block px-4 py-2  w-full text-start dropdown-menu" type="button">
                        Mon profile
                    </button>                
                </li>
                <li>
                    <a href="{{route('logout')}}" class="block px-4 py-2 dropdown-menu">déconexion</a>
                </li>
                </ul>
            </div>
            <div class="ml-1">
                <img class="user-profile" src="images/user.png" alt="">
            </div>
        </div>
    </div>
</nav>
<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="w-full hidden justify-center items-center  z-50 h-full  fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <form id="update-user-info-form" method="POST" action="{{route('users-info.update')}}">
                @csrf
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Mon Profile
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div id="updated-success" class="hidden mx-4 mt-6 p-2 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 " >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                          
                    <div class="ml-3 text-sm font-medium">
                      <strong>succès</strong><p class="message-success-updated"></p>
                    </div>
                    <button id="close-updateUserbutton" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "   aria-label="Close">
                      <span class="sr-only">Dismiss</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                  
                <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <div class="w-100">
                            <label for="name" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Nom</label>
                            <input type="text" name="name"  id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " {{ auth()->user()->cannot('user-edit') ? 'readonly disabled' : ''}} required>
                        </div>
                        <div class="w-100">
                            <label for="email" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  {{ auth()->user()->cannot('user-edit') ? 'readonly disabled' : ''}}  required>
                        </div>                       
                        <div class="w-100">
                            <label for="password" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Mot de Pass</label>
                            <input type="password" name="password"  id="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2 " {{ auth()->user()->cannot('user-edit') ? 'readonly disabled' : ''}} >
                        </div>   
                        
                    </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    @can('user-edit')
                    <button  type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">Enregistrer</button>
                    @endcan
                    <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </form>

        </div>
    </div>
</div>

