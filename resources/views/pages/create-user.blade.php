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
                                Add User
                            </h3>
                        </div>
                        <form action="{{route('users.create')}}"  method="post" >
                            @csrf
                            <div class="mx-4 mt-6 ">
                                <div class="w-100">
                                    <label for="name" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">name of User</label>
                                    <input type="text" name="name"  id="nameuser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name of user" required>
                                </div>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="email" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">email of User</label>
                                    <input type="email" name="email"  id="emailuser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email of user" required>
                                </div>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="role" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">User Role</label>
                                    <select name="role_name" id="role" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                        @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>                         
                                <div class="w-100">
                                    <label for="password" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">password</label>
                                    <input type="password" name="password"  id="passworduser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2 " placeholder="user password">
                                </div>   
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="password" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Confirm password</label>
                                    <input type="password" name="confirm_password"  id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="confirm password">
                                </div>   
                                @error('confirm_password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                                <button  type="submit" class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Créer</button>
                                <a href='{{url('users')}}'   class=" text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </section>
        </main>
</div>
@include('layouts.dashboardFooter')