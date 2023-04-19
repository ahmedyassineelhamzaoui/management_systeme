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
                @if(session('info'))
                    <div id="alert-border-4" class="mx-4 flex p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div class="ml-3 text-sm font-medium">
                            <strong>Error  </strong>{{ session('info') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                @endif            
            <div id="add-User" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="w-full p-4 overflow-x-hidden overflow-y-auto  ">
                <div class="relative w-full h-full  md:h-auto">
                    <div class="bg-white rounded-lg shadow dark:bg-gray-700 w-full">
                        <div class="flex justify-between p-4 border-b  dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Update {{$user->name}}
                            </h3>
                        </div>
                        <form action="{{route('user.update',$user->id)}}"  method="post" >
                            @csrf
                            @method('put')
                            <div class="mx-4 mt-6 ">
                                <div class="w-100">
                                    <label for="name" class="font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">name of User</label>
                                    <input type="text" value="{{$user->name}}" name="name"  id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name of user" required>
                                </div>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="email" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">email of User</label>
                                    <input type="email" value="{{$user->email}}" name="email"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email of user" required>
                                </div>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="role" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 dark:text-white">User Role</label>
                                    <select name="role_name" id="role" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-2">
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}" {{ (count($user->roles) > 0 && $user->roles[0]->id == $role->id) ? 'selected' : ''}}>{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>                         
                                <div class="w-100">
                                    <label for="password" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">password</label>
                                    <input type="password" value="{{$user->password}}" name="password"  id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2 " placeholder="user password">
                                </div>   
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="w-100">
                                    <label for="password" class="mt-2 font-serif block mb-2 text-md font-bold text-gray-900 ">Confirm password</label>
                                    <input type="password" value="{{$user->password}}" name="confirm_password"  id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full px-2.5 py-2" placeholder="confirm password">
                                </div>   
                                @error('confirm_password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b ">
                                <button  type="submit" class=" text-black border-2 hover:bg-yellow-500 border-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Modifier</button>
                                <a href='{{url('users')}}'  class=" text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@include('layouts.dashboardFooter')