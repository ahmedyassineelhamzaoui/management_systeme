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
            <div id="add-User" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="w-full p-4 mb-4 overflow-x-hidden overflow-y-auto  ">
                <div class="relative w-full h-full  md:h-auto">
                    <div class="bg-white rounded-lg shadow  w-full">
                        <div class="flex justify-between p-4 border-b  ">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Modifier le Role {{$role->name}}
                            </h3>
                        </div>
                        <form id="role-formupdate" action="{{route('role.update',$role->id)}}"  method="post" >
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mt-6 ">
                                <div class="w-100">
                                    <label for="name" class="font-serif block mb-2 text-md font-bold text-gray-900 ">nom du Role</label>
                                    <input type="text" name="name" value="{{$role->name}}"  id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name of user" required>
                                </div>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="permission" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Permissions</label>
                                    <div name="permessions"  id="permissions"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " rows="10" required>
                                        @foreach ($permissions as $permission)
                                            <div class="flex items-center mb-1">
                                                <input {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }} type="checkbox" value="{{ $permission->name }}" class="cursor-pointer mr-2" name="permission[]" id="{{ $permission->name }}" />
                                                <label for="{{ $permission->name }}" class="cursor-pointer text-blue-900">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="error-msgu" class="text-red-600 hidden">Please select at least one permission.</div>  
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                                <button  type="submit" class=" text-black border-2 hover:bg-yellow-500 border-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Update</button>
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