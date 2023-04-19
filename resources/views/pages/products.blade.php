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
                <div>
                    <div class="flex justify-end">
                       <button id="listOf-operations" data-dropdown-toggle="opperations" class="border-2 border-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center button-operation" type="button">list des opération <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="opperations" class="border-2 border-gray-300 z-10 hidden divide-y list-operation rounded-b-lg shadow w-44 ">
                        <button data-modal-target="import-product" data-modal-toggle="import-product" class="flex w-full justify-start items-center  py-2 operation-menu" type="button">
                            <span class="text-lg mr-2 pl-1"><i class="fa-solid fa-file-csv"></i></span>
                            <span>importer produits</span> 
                        </button>
                        <a class="flex justify-start w-full operation-menu py-2 " href="{{ route('product.export') }}">
                            <span class="text-lg mr-2 pl-1"><i class="fa-solid fa-file-csv"></i></span>
                            <span>Exporter les produits </span> 
                        </a>
                        @can('role-list')
                        <button data-modal-target="large-modal" data-modal-toggle="large-modal" class="flex w-full justify-start items-center operation-menu  py-2" type="button">
                            <span class="text-lg mr-2 pl-1"><i class="fa-solid fa-plus"></i></span>
                            Ajouter Produit
                        </button>
                        @endcan
                        @if(count($products)>0)
                        <button id="alementer-stock"  class="flex justify-start items-center w-full text-center operation-menu  py-2" type="button">
                            <span class="text-lg mr-2 pl-1"><i class="fa-solid fa-boxes-packing"></i></span>
                            Alimenter le stock
                        </button>
                        @endif
                    </div>
                    <div>
                        <h2 class="font-bold text-green">Produits</h2>
                    </div>
                    @if(session('error'))                  
                    <div id="alert-border-4" class="flex p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div class="ml-3 text-sm font-medium">
                            <strong>Error  </strong>{{ session('error') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
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
                        <strong class="mr-2">Success </strong>{{ session('succès') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "  data-dismiss-target="#alert-border-3" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    @endif
                    <div id="update-product-success" class="hidden mx-4 mt-6 p-2 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 " >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                        <div class="ml-3 text-sm font-medium flex items-center ">
                          <strong class="mr-2">succès</strong><p class="message-success-updateProduct"></p>
                        </div>
                        <button  id="close-alert-updateProduct" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 " data-dismiss-target="#update-product-success"  aria-label="Close">
                          <span class="sr-only">Dismiss</span>
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                   
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                        <div class="flex items-center justify-start px-4 py-3">
                            <div class="relative ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Chercher" required>
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray uppercase table-bg ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 flex items-center">
                                        <input id="check-allRows" type="checkbox" class="hidden mr-2">
                                        <label for="check-allRows">Réference</label> 
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
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-body-bg">
                                @forelse ($products as $product)
                                <tr class="border-b text-tablecolor ">
                                    <th scope="row" class="px-6 py-4 flex items-center  whitespace-nowrap ">
                                        <input id="check-{{$product->reference}}-row" type="checkbox" class="mr-2 hidden chack-one-row">
                                        <label for="check-{{$product->reference}}-row">{{$product->reference}}</label> 
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$product->nom}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->marque->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$product->Category->name}} 
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$product->quantite}}
                                    </td>
                                    <td>
                                        {{$product->prix}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <button data-product-id="{{ $product->id }}" data-modal-target="edit-productModal"
                                                class="text-green-500 cursor-pointer edit-productInfo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>                                                      
                                            </button>
                                              
                                            <button onclick="deleteProduct({{ $product->id }})" data-modal-target="delete-product" data-modal-toggle="delete-product"  class="text-red-600 cursor-pointer delete-product">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>                                                      
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                    
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-2">Aucun Produit exist</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="flex items-center justify-center ">
                            <div class="flex justify-center my-2">
                                {{ $products->links() }}
                            </div> 
                        </div>  
                    </div>
                    <div class="mt-2 flex items-center">
                        <button id="hide-checkboxButtons"  class="hidden w-full  md:w-auto  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                           Anuller la selection
                        </button>
                        <button  data-modal-target="products-selectedModal" data-modal-toggle="products-selectedModal" id="show-selectproducts"  class="hidden w-full ml-2 md:w-auto  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                            suivant
                         </button>
                    </div>
                </div>
            </section>
        </main>
    </div>
{{-- add product --}}
<div id="large-modal" tabindex="-1" class="w-full hidden justify-center items-center z-50 h-screen fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <form id="create-product-form" action="{{route('product.create')}}"  method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Ajouter Produit
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="large-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div>
                    <div id="create-product-success" class="hidden mx-4 mt-6 p-2 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 " >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                        <div class="ml-3 text-sm font-medium flex items-center ">
                            <strong class="mr-2">succès  </strong><p class="message-success-createProduct"></p>
                        </div>
                        <button   type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "   aria-label="Close">
                            <span class="sr-only">Dismiss</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    @csrf
                    <div class="mx-4 mt-6 ">
                        <div class="w-100">
                            <label for="reference" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Réfrence du Produit</label>
                            <input type="text" name="reference"  id="reference" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Réference" required>
                        </div>
                        @error('reference')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="w-100 mt-2">
                            <label for="nom" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">le nom du produit</label>
                            <input type="text" name="nom"  id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="le nom du produit" required>
                        </div>
                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        
                        <div class="w-100">
                            <label for="marque_id" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Marque du Produit</label>
                            <select name="marque_id" id="marque_id" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                @foreach ($marques as $marque)
                                <option value="{{$marque->id}}">{{$marque->name}}</option>
                                @endforeach
                            </select>
                        </div>   
                        <div class="w-100">
                            <label for="ctegory_id" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Category du produit</label>
                            <select name="category_id" id="category_id" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>                         
                        <div class="w-100">
                            <label for="quantite" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Quantité du Produits</label>
                            <input type="number" name="quantite" min="0" id="quantite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Quantité">
                        </div>   
                        @error('quantité')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="w-100">
                            <label for="prix" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Prix du Produit</label>
                            <input type="number" min="0" name="prix"  id="prix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Prix">
                        </div>   
                        @error('prix')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Modal footer -->
                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button   type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter</button>
                <button data-modal-hide="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Anuller</button>
            </div>
        </form>
    </div>
</div>
{{-- edit product --}}
<div id="edit-productModal" tabindex="-1" class="w-full hidden justify-center items-center z-50 h-screen fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <form id="edit-product-form" action="{{route('product.update')}}"  method="post" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            @csrf
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Modifier le Produit
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="edit-productModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div>
                    @csrf
                    <input type="hidden" name="product_formId" id="product_formId">
                    <div class="mx-4 mt-6 ">
                        <div class="w-100">
                            <label for="reference_updated" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Réfrence du Produit</label>
                            <input type="text" name="reference_updated"  id="reference_updated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Réference" required>
                        </div>
                        @error('reference')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="w-100 mt-2">
                            <label for="nom_updated" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">le nom du produit</label>
                            <input type="text" name="nom_updated"  id="nom_updated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="le nom du produit" required>
                        </div>
                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        
                        <div class="w-100">
                            <label for="marque_idupdated" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Marque du Produit</label>
                            <select name="marque_idupdated" id="marque_idupdated" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                
                            </select>
                        </div>   
                        <div class="w-100">
                            <label for="ctegory_idupdated" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Category du produit</label>
                            <select name="ctegory_idupdated" id="ctegory_idupdated" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                               
                            </select>
                        </div>                         
                        <div class="w-100">
                            <label for="quantiteupdated" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Quantité du Produits</label>
                            <input type="number" name="quantiteupdated" min="0" id="quantiteupdated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Quantité">
                        </div>   
                        @error('quantité')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="w-100">
                            <label for="prixupdated" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Prix du Produit</label>
                            <input type="number" min="0" name="prixupdated"  id="prixupdated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Prix">
                        </div>   
                        @error('prix')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Modal footer -->
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button   type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">modifier</button>
                <button data-modal-hide="edit-productModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Anuller</button>
            </div>
        </form>
    </div>
</div>
{{-- delete product --}}
<div id="delete-product" tabindex="-1" class="fixed z-50 hidden top-0 left-0 w-full h-full  items-center justify-center" style="background-color: rgba(0,0,0,0.5);">
    <div class="relative rounded-lg p-6 bg-white">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-medium">Confirmation</h3>
            <button data-modal-hide="delete-product" class="text-gray-500 font-medium cursor-pointer close-modal" id="close-deletedModal"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            </button>
        </div>
        <div class="mt-4">
            <p>Voulez-vous vraiment supprimer cet utilisateur ?</p>
        </div>
        <div class="flex justify-end mt-4">
            <form method="post" action="{{route('delete.product')}}">
                @csrf
                @method('delete')
                <input type="hidden" name="product_deletedId" id="product_deletedId">
                <button data-modal-hide="delete-product" type="button" class="px-4 py-2 rounded-md text-white bg-gray-600 close-modal"  >Cancel</button>
                <button class="px-4 py-2 rounded-md text-white bg-red-600" type="submit" name="delete-category">Delete</button>
            </form>
        </div>
    </div>
</div>
{{-- import product --}}
<div id="import-product" tabindex="-1" aria-hidden="true" class="fixed z-50 hidden top-0 left-0 w-full h-full  items-center justify-center bg-black bg-opacity-50" >
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="import-product">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <form class="space-y-6" method="POST"  enctype="multipart/form-data"   action="{{route('import.product')}}">
                   @csrf
                    <div>
                        <label for="product_file" class="block mb-2 text-sm font-medium text-gray-900 ">importer votre fichier ici</label>
                        <input accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" type="file" name="product_file" id="product_file"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  " required>
                    </div>
                    
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">importer</button>
                    
                </form>
            </div>
        </div>
    </div>
</div> 
{{-- selected products --}}
<div id="products-selectedModal" tabindex="-1" class="w-full hidden justify-center items-center z-50 h-screen fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <form id="product-selectedForm" action="{{route('allimenter.stock')}}"  method="post" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            
            @csrf
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                 les Produits selectionés
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="products-selectedModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div id="alimenter-stock-success" class="hidden mx-4 mt-6 p-2 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 " >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>                          
                <div class="ml-3 text-sm font-medium flex items-center ">
                    <strong class="mr-2">Info  </strong><p class="message-success-alimenter"></p>
                </div>
                <button id="alimenter-stockhidden"  type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 "   aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                    <table class="w-full text-sm text-left mr-2 text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray uppercase table-bg ">
                            <tr>
                                <th scope="col" class="px-6 py-3 flex items-center">
                                    Reférence
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
                                    prix
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    quantité
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tbody-products" class="table-body-bg">
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button   type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Alimenter le stock</button>
                <button   data-modal-hide="products-selectedModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Anuller</button>
            </div>
        </form>
    </div>
</div>
@include('layouts.dashboardFooter')


