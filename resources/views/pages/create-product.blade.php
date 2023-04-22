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
            <div id="add-User" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="w-full p-4 overflow-x-hidden overflow-y-auto  ">
                <div class="relative w-full h-full  md:h-auto">
                    <div class="bg-white rounded-lg shadow dark:bg-gray-700 w-full">
                        <div class="flex justify-between p-4 border-b  dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                <span ><span class="mr-2"><i class="fa-solid fa-plus"></i></span> ajouté Produit</span>               
                            </h3>
                        </div>
                        <form action="{{route('product.create')}}"  method="post" >
                            @csrf
                            <div class="mx-4 mt-6 ">
                                <div class="w-100 mt-2">
                                    <label for="nom" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">le nom du produit</label>
                                    <input type="text" name="nom"  id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="le nom du produit" required>
                                </div>
                                @error('nom')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="réference" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Réfrence du Produit</label>
                                    <input type="email" name="réference"  id="réference" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Réference" required>
                                </div>
                                @error('réference')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="marque_id" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Marque du Produit</label>
                                    <select name="marque_id" id="marque_id" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                        {{-- @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>   
                                <div class="w-100">
                                    <label for="ctegory_id" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Category du produit</label>
                                    <select name="category_id" id="category_id" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                        {{-- @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>                         
                                <div class="w-100">
                                    <label for="quantité" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Quantité en Stock</label>
                                    <input type="number" name="quantité"  id="quantité" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Quantité">
                                </div>   
                                @error('quantité')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="prix" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Prix du Produit</label>
                                    <input type="number" name="prix"  id="prix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="Prix">
                                </div>   
                                @error('prix')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                                <button  type="submit" class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Create</button>
                                <a href='{{route('products')}}'   class=" text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </section>
        </main>
</div>
@include('layouts.dashboardFooter')