<div>

<div id="add-ProductForm" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed  justify-center items-center top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto bg-black bg-opacity-50 h-screen ">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700 ">
            <div class="flex justify-between p-4 border-b  dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Product
                </h3>
                <button id="closeAdd-product" type="button" class=" text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            @if (session()->has('success'))
            <div class="bg-green-200 p-3 mb-3 rounded-md">{{ session('success') }}</div>
        @endif
    
        <form wire:submit.prevent="{{'store'}}">
            <div class="mb-3">
                <label for="name" class="block mb-1 font-bold">Name</label>
                <input type="text" wire:model.lazy="name" id="name" name="name" class="w-full p-2 border rounded-md">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-3">
                <label for="detail" class="block mb-1 font-bold">Detail</label>
                <textarea wire:model.lazy="detail" id="detail" name="detail" class="w-full p-2 border rounded-md"></textarea>
                @error('detail') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-3">
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md">Create</button>
            </div>
        </form>
        </div>
    </div>
</div>

<button id="add-product"  class="px-3 py-2 add-button rounded-md text-white flex items-center">
    <span class="mr-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
        </svg>
    </span>         
    <span > add Product</span>               
</button>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray uppercase table-bg ">
        <tr>
            <th scope="col" class="px-6 py-3">
                id
            </th>
            <th scope="col" class="px-6 py-3">
                Name
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
        {{-- @forelse ($users as $user) --}}
        <tr class="border-b text-tablecolor ">
            <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                {{-- {{$user->id}} --}}
            </th>
            <td class="px-6 py-4">
                {{-- {{$user->name}} --}}
            </td>
            <td class="px-6 py-4">
                Laptop PC
            </td>
            <td class="px-6 py-4">
                {{-- {{$user->email}} --}}

            </td>
            <td>
                Online
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center">
                    <span class="text-green-500 cursor-pointer" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>                                                      
                    </span>
                    <span  class="text-red-600 cursor-pointer deleteButton" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                                                      
                    </span>
                </div>
            </td>
            
        </tr>
        {{-- @empty --}}
        <tr>
            <td colspan="6" class="text-center py-2">No Record Found</td>
        </tr>
        {{-- @endforelse --}}
    </tbody>
</table>
</div>