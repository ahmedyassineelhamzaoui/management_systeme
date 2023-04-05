@include('layouts.authHead')

<div class="login-page w-full h-screen flex justify-center items-center fixed left-0 top-0 right-0 bottom-0">
     <div class="bg-black bg-opacity-50 w-[90%] sm:w-[40%] py-4 rounded-lg ">
        <div class="w-[90%] mx-auto flex justify-center">
            <h1 class="font-bold text-center text-gray-100">Connexion</h1>
        </div>
        @if(session('error'))
        <div id="alert-border-2" class="flex mx-4 p-4 mb-4 text-red-800 border-t-4 border-red-400 bg-red-50 " role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium">
                <strong>Error  </strong> {{session('error')}}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 "  data-dismiss-target="#alert-border-2" aria-label="Close">
              <span class="sr-only">Dismiss</span>
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        @if(session('success'))                  
        <div id="alert-border-3" class="flex mx-4 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 " role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                          
            <div class="ml-3 text-sm font-medium">
                <strong>Success </strong>{{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 "  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        <form class="w-[90%] mx-auto space-y-4 " action="{{route('login')}}" method="POST" >
            @csrf
            <div class="w-[90%] mx-auto">
                <label class="block mb-2 font-bold text-gray-50" for="email">Email</label>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <span class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>  
                    </span>
                    <input type="email" id="email" name="email" class="w-full text-md font-bold  text-gray-900 sm:text-sm rounded-r-md block py-4  px-2.5 outline-none focus:ring-blue-500 focus:border-2 focus:border-blue-500 " required placeholder="Entrer votre email">
                    @error('email')
                    <span class="text-red-700 font-bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-[90%] mx-auto">
                <label class="block mb-2 font-bold text-gray-50 " for="password">Mot de passe</label>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <span class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>                          
                    </span>
                    <input type="password" id="password" name="password"class="w-full py-4 text-gray-900 text-md font-bold  rounded-r-md block  px-2.5 outline-none focus:ring-blue-500 focus:border-2 focus:border-blue-500 " required placeholder="Entrer votre mot de pass">
                    @error('password')
                    <span class="text-red-700 font-bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-[90%] mx-auto flex justify-between items-center">
                <p class="flex items-center">
                    <input type="checkbox" name="" id="check-box" class="mr-2 cursor-pointer"><label for="check-box" class="cursor-pointer text-gray-100">Se souvenir de moi</label>
                </p>
                <p><a href="{{url('forgot-password')}}" class="underline font-bold text-blue-500 hover:text-blue-700" href="">Mot de passe oublié</a></p>
            </div>
            <div class="w-[90%] mx-auto flex justify-center items-center">
                <input type="submit" name="login" id="login" class="w-full bg-blue-700 hover:bg-blue-800 rounded-lg text-white font-bold py-3 cursor-pointer" value="Se connecter">
            </div>
       </form>
     </div>
</div>
@include('layouts.authFooter');