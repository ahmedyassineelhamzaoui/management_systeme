@include('layouts.authHead')
<div  class="login-page w-full h-screen flex justify-center items-center fixed left-0 top-0 right-0 bottom-0">
     <div class="bg-black bg-opacity-50 w-[90%] sm:w-[40%] py-4 rounded-lg ">
        <p class="w-[80%] text-center mx-auto text-white text-lg ">
            Entrez l'adresse e-mail associé à votre compte 
        </p>
        <form class="w-[90%] mx-auto space-y-4 " action="" >
            @csrf
            <div class="w-[90%] mx-auto">
                <label class="block mb-2 font-bold text-gray-50" for="email">Email</label>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <span class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>  
                    </span>
                    <input type="email" id="email" name="email" class="w-full text-md font-bold  text-gray-900 sm:text-sm rounded-r-md block py-4  px-2.5 outline-none  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " required placeholder="Entrer votre email">
                </div>
            </div>
            <div class="w-[90%] mx-auto flex justify-between items-center">
                <p><a href="{{route('login-page')}}" class="underline font-bold text-blue-500 hover:text-blue-700" href="">Retour à la page de connexion</a></p>
            </div>
            <div class="w-[90%] mx-auto flex justify-center items-center">
                <input type="submit" name="login" id="login" class="w-full bg-blue-700 hover:bg-blue-800 rounded-lg text-white font-bold py-3 cursor-pointer" value="Envoyer">
            </div>
       </form>
     </div>
</div>
</body>
</html>