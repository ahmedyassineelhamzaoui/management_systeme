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
                <div class="mt-20">
                    <h2 class="font-bold text-green">Stock</h2>
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
                      <strong>succès </strong>{{ session('succès') }}
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
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                    <div class="flex items-center justify-start px-4 py-3">
                        <div class="relative ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="search" id="searchIn-stock" name="search_inStock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Chercher" >
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray uppercase table-bg ">
                            <tr>
                                <th scope="col" class="px-6 py-3 flex items-center">
                                    Réference
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Marque
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    categories
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    quantité
                                </th>
                                <th>
                                    prix
                                </th>
                            </tr>
                        </thead>
                        <tbody id="body-userStock" class="table-body-bg">
                            @forelse ($products as $i => $item)
                            <tr class="border-b text-tablecolor ">
                                <th scope="row" class="px-6 py-4 flex items-center  whitespace-nowrap ">
                                    {{$item['product']->reference}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$item['product']->nom}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item['product']->marque->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$item['product']->Category->name}} 
                                </td>
                                <td class="px-6 py-4">
                                    {{$item['quantity']}}
                                </td>
                                <td>
                                    {{$item['product']->prix}}
                                </td>
                            </tr>
                             @empty 
                            <tr>
                                <td colspan="6" class="text-center py-2">Aucun Produit existe</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="flex items-center justify-center ">
                        <div class="flex justify-center my-2">
                            {{-- {{ $products->links() }} --}}
                        </div> 
                    </div>  
                </div>
            </section>
        </main>
    </div>

@include('layouts.dashboardFooter')


