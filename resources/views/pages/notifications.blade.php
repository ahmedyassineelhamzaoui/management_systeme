@include('layouts.dashboardHeader')
    <div class="page-content">
        <!------------------------------------- BEGIN of ASIDE ---------------------------------->
        @include('layouts.sidebar')
        <!------------------------------------- END of ASIDE ---------------------------------->
        <!------------------------------------- BEGIN of NAVBAR ---------------------------------->
        @include('layouts.dashboardNav')
        <!------------------------------------- END of NAVBAR ---------------------------------->
        
        <main id="main-page"> 
            <section id="my-section">
                <div class="mt-4 flex w-full justify-end">
                </div>
                <div class="mt-4">
                    <h2 class="font-bold text-green">Notifications</h2>
                </div>
                @if(session('error'))                  
                <div id="alert-border-3" class="flex mt-2 p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 " role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                          
                    <div class="ml-3 text-sm font-medium">
                      <strong>Error </strong>{{ session('error') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 "  data-dismiss-target="#alert-border-3" aria-label="Close">
                      <span class="sr-only">Dismiss</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
                @if(session('succès'))                  
                <div id="alert-border-3" class="flex mt-2 p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                          
                    <div class="ml-3 text-sm font-medium">
                      <strong>Success </strong>{{ session('succès') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "  data-dismiss-target="#alert-border-3" aria-label="Close">
                      <span class="sr-only">Dismiss</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
                @if(session('info'))
                <div id="alert-border-4" class="flex p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 " role="alert">
                    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div class="ml-3 text-sm font-medium">
                        <strong>Info  </strong>{{ session('info') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 " data-dismiss-target="#alert-border-4" aria-label="Close">
                      <span class="sr-only">Dismiss</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
                @if (count($notifications) > 0)
                    <ul>
                        @foreach ($notifications as $notification)
                        <div class="w-full mt-2 flex items-center justify-between rounded-lg bg-gray-200 border-gray-300 py-3 px-4">
                          <div>
                            <div class="flex items-center"> <img class="w-10 h-10 mr-2" src="images/{{ json_decode($notification->data)->picture }}" alt=""> <p>{{ json_decode($notification->data)->user }} {{ json_decode($notification->data)->title }}</p> <a class="text-blue-600 ml-2" href="{{ json_decode($notification->data)->link }}"> voir les {{ json_decode($notification->data)->pages }}</a> </div> 
                            <div class="flex items-center mt-2 ">
                                @if(json_decode($notification->data)->accept == 'yes')
                                <button class="mr-2 px-4 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white">accepter</button>
                                <button class="px-4 py-2 rounded-md bg-red-500 hover:bg-red-600 text-white">Refuser</button>
                                @endif
                            </div>
                          </div>
                          <div >
                            @can('role-list')
                            <button  data-modal-target="delete-notification" data-modal-toggle="delete-notification"  class="text-red-600 cursor-pointer delete-product">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>                                                      
                            </button>
                            @endcan
                          </div>
                        </div>
                        @endforeach
                    </ul>
                @else
                    <p>Aucune notification à afficher.</p>
                @endif
               
            </section>
        </main>
    </div>

@include('layouts.dashboardFooter')


