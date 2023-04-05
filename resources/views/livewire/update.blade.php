<div id="add-User" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed  justify-center items-center top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto bg-black bg-opacity-50 h-screen ">
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
            <form>
                <input type="hidden" wire:model="product_id">
                <div class="mx-4 mt-6">
                    <div class="w-100">
                        <label for="name" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">name of product</label>
                        <input type="text" wire:model="name"  id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name of user" required>
                    </div>
                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror

                    <div class="w-100">
                        <label for="detail" class="font-serif block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
                        <input type="text" wire:model="detail"  id="detail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="confirm password">
                    </div>  
                    @error('detail') <span class="text-danger">{{ $message }}</span>@enderror 
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                    <button  type="submit" wire:click.prevent="update()"  class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Create</button>
                    <button id="decline-product"  type="button" class="closeModal text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>
