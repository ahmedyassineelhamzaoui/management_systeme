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
                                Ajouté Le Role
                            </h3>
                        </div>
                        <form id="role-form" action="{{route('create.role')}}"  method="post" >
                            @csrf
                            <div class="mx-4 mt-6 ">
                                <div class="w-100">
                                    <label for="name" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">name of Role</label>
                                    <input type="text" name="name"  id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name of user" required>
                                </div>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="permission" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">Permissions</label>
                                    <div name="permessions"  id="permissions"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " rows="10" required>
                                      @foreach ($permissions as $permission)
                                          <div class="flex items-center mb-1 ">
                                            <input type="checkbox" id="{{$permission->name}}" value="{{$permission->name}}" class="cursor-pointer mr-2"  name="permission[]" class="mr-2"> <label for="{{$permission->name}}" class="cursor-pointer text-blue-900">{{$permission->name}}</p>
                                          </div>
                                      @endforeach
                                    </div>
                                </div>
                                <div id="error-msg" class="text-red-600 hidden">Please select at least one permission.</div>  
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                                <button  type="submit" class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Create</button>
                                <a href='{{route('roles')}}'   class=" text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </section>
        </main>
</div>
@include('layouts.dashboardFooter')