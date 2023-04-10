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
                    <div class="flex w-full justify-end">
                        <button data-modal-target="large-modal" data-modal-toggle="large-modal" class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                            Ajouter Produit
                        </button>
                    </div>
                    <div>
                        <h2 class="font-bold text-green">Produits</h2>
                    </div>
                    @if(session('success'))                  
                    <div id="alert-border-3" class="flex mt-2 p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                        <div class="ml-3 text-sm font-medium">
                          <strong>Success </strong>{{ session('success') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                          <span class="sr-only">Dismiss</span>
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    @endif
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
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray uppercase table-bg ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
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
                                        prix
                                    </th>
                                    <th>
                                        quantité
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-body-bg">
                                {{-- @forelse ($users as $user) --}}
                                <tr class="border-b text-tablecolor ">
                                    <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                                        {{-- {{$user->id}} --}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{-- {{$user->name}} --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- @if ($user->roles->isNotEmpty())
                                            {{$user->roles[0]->name}}
                                        @else
                                            No role assigned
                                        @endif   --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- {{$user->email}} --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- {{$user->email}} --}}
                                    </td>
                                    <td>
                                        {{-- Online --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <a  class="text-green-500 cursor-pointer">
                                                {{-- href="{{ url('/update-user/'.$user->id)}}" --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>                                                      
                                            </a>
                                            <form method="post" >
                                                {{-- action="{{ route('user.delete', $user->id) }}" --}}
                                                @csrf
                                                @method('delete')
                                            <button  class="text-red-600 cursor-pointer ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>                                                      
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                    
                                </tr>
                                {{-- @empty --}}
                                <tr>
                                    <td colspan="7" class="text-center py-2">No Record Found</td>
                                </tr>
                                {{-- @endforelse --}}
                            </tbody>
                        </table>
                        <div class="flex items-center justify-center ">
                            <div class="flex justify-center my-2">
                                {{-- {{ $users->links() }} --}}
                            </div> 
                        </div>  
                    </div>
                </div>
            </section>
        </main>
    </div>
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
                              <strong>succès  </strong><p class="message-success-createProduct"></p>
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
    @include('layouts.dashboardFooter')


