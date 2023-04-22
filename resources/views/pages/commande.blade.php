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
                <div class="flex w-full justify-end">
                    <button data-modal-target="products-Modal" data-modal-toggle="products-Modal" class="px-3 py-2 add-button rounded-md text-white flex items-center">
                        <span class="mr-2">     
                        </span>         
                        <span > Creér une commande</span>               
                    </button>
                </div>
                <div>
                    <h2 class="font-bold text-green">Commande</h2>
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
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray uppercase table-bg ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Utilisateur
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-body-bg">
                            @forelse($commandes as $commande)
                            <tr class="border-b text-tablecolor ">
                                <th scope="row" class="px-6 py-4   whitespace-nowrap ">
                                    {{$commande->id}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$commande->user_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$commande->status}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <span class="text-green-500 cursor-pointer edit-commande" title="edit" data-modal-target="edit-commandeModal" data-commande-id="{{ $commande->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>                                                      
                                        </span>
                                        <span class="text-red-600 cursor-pointer" onclick="deleteCommande({{ $commande->id }})" data-modal-target="delete-commande" data-modal-toggle="delete-commande" title="delete" onclick="">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>                                                      
                                        </span>
                                        <form method="post" action='{{route('users.downloadCommande')}}' class="text-lg ml-2">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$commande->id}}">
                                            <button type="submit"><i class="fa-solid fa-file-lines text-yellow-700 cursor-pointer"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                               <td colspan="4" class="text-center py-1"> aucune catégorie exist</td>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="flex items-center justify-center ">
                        <div class="flex justify-center my-2">
                            {{ $commandes->links() }}
                        </div> 
                    </div>  
                </div>
            </section>
        </main>
    </div>
{{-- add commande --}}
<div id="products-Modal" tabindex="-1" class="w-full hidden justify-center items-center z-50 h-screen fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <form id="product-selectedFormCommande" action=""  method="post" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            @csrf
            <div class="flex items-center justify-between p-5 border-b rounded-t ">
                <h3 class="text-xl font-medium text-gray-900 ">
                 Créer un Commande
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="products-Modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div id="success-commande" class="hidden mx-4 mt-2 p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>                          
                <div class="ml-3 text-sm font-medium flex items-center">
                    <strong>succès </strong> <p class="ml-2 add-commandeMessage"></p> 
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "  data-dismiss-target="#success-commande" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                    <div class="flex items-center justify-start px-4 py-3">
                        <div class="relative ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="searchProduct" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Chercher" >
                        </div>
                    </div>
                    <table class="w-full text-sm text-left mr-2 text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray uppercase table-bg ">
                            <tr>
                                <th scope="col" class="px-6 py-3 flex items-center">
                                    <input id="check-allProductComande" type="checkbox" class="mr-2">
                                    <label for="check-allProductComande">Réference</label> 
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
                        <tbody id="tbodyProductForm" class="table-body-bg">
                            @if($products)
                            @forelse ($products as $i => $product)
                            <tr class="border-b text-tablecolor ">
                                <th scope="row" class="px-6 py-4 flex items-center  whitespace-nowrap ">
                                    <input id="{{$product->reference}}" name="items[]" value="{{ $product->reference }}"  type="checkbox" class="mr-2 check-one-rowComande">
                                    <input type="hidden" name="references[]" value="{{$product->reference}}">
                                    <label for="{{$product->reference}}">{{$product->reference}}</label> 
                                </th>
                                <td class="px-6 py-4">
                                    <input type="hidden" name="nom[]" value="{{$product->nom}}">
                                    {{$product->nom}}
                                </td>
                                <td class="px-6 py-4">
                                    <input type="hidden" name="marques[]" value="{{ $product->marque->name }}">
                                    {{ $product->marque->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <input type="hidden" name="categories[]" value="{{$product->Category->name}}">
                                    {{$product->Category->name}} 
                                </td>
                                <td>
                                    <input type="hidden" name="prix[]" value="{{$product->prix}}">
                                    {{$product->prix}}
                                </td>
                                <td class="px-6 py-4">
                                    <input type="number" class="border-gray-200 text-start bg-transparent" name="quantity[]" value="{{$quantities[$product->id]}}" min="0" max="{{$quantities[$product->id  ]}}" step="1">
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-2">aucun Produit exist</td>
                            </tr>
                            @endforelse
                            @else
                            <tr>
                                <td colspan="7" class="text-center py-2">aucun Produit exist</td>
                            </tr>
                            @endif
                        </tbody> 
                    </table>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button   type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Créer</button>
                <button   data-modal-hide="products-Modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Anuller</button>
            </div>
        </form>
    </div>
</div>
{{-- delete commande --}}
<div id="delete-commande" tabindex="-1" class="fixed z-50 hidden top-0 left-0 w-full h-full  items-center justify-center" style="background-color: rgba(0,0,0,0.5);">
    <div class="relative rounded-lg p-6 bg-white">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-medium">Confirmation</h3>
            <button data-modal-hide="delete-commande" class="text-gray-500 font-medium cursor-pointer close-modal" id="close-deletedModal"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            </button>
        </div>
        <div class="mt-4">
            <p>Voulez-vous vraiment supprimer cet commande ?</p>
        </div>
        <div class="flex justify-end mt-4">
            <form method="post" action="{{route('delete.commande')}}">
                @csrf
                @method('delete')
                <input type="hidden" name="commande_deletedId" id="commande_deletedId">
                <button data-modal-hide="delete-commande" type="button" class="px-4 py-2 rounded-md text-white bg-gray-600 close-modal"  >Cancel</button>
                <button class="px-4 py-2 rounded-md text-white bg-red-600" type="submit" name="delete-category">Delete</button>
            </form>
        </div>
    </div>
</div>
{{-- edit commande --}}
<div id="edit-commandeModal" tabindex="-1" class="w-full hidden justify-center items-center z-50 h-screen fixed top-0 left-0 right-0 p-4 overflow-x-hidden  overflow-y-auto bg-black bg-opacity-50 ">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <form id="edit-comande-form" action="{{route('update.commande')}}"  method="post" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            @csrf
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Modifier la commande
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="edit-commandeModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <input type="hidden" name="comande_updatedId" id="comande-updatedId">
                <label for="commande-status" class="block mb-2 text-sm font-medium text-gray-900 ">Le status du commande</label>
                <select name="commande_status" id="commande-status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </select>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button   type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">modifier</button>
                <button   data-modal-hide="edit-commandeModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Anuller</button>
            </div>
        </form>
    </div>
</div>
@include('layouts.dashboardFooter')


