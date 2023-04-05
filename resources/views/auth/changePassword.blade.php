@include('layouts.authHead')
<div class="login-page w-full h-screen flex justify-center items-center fixed left-0 top-0 right-0 bottom-0">
     <div class="bg-black bg-opacity-50 w-[90%] sm:w-[40%] py-4 rounded-lg dark:bg-gray-700">
        <div class="w-[90%] mx-auto flex justify-center">
            <h1 class="font-bold text-center text-gray-100">Mettez à jour votre mot de passe</h1>
        </div>
        <form class="w-[90%] mx-auto space-y-4 " action="" >
            @csrf
            <div class="w-[90%] mx-auto">
                <label class="block mb-2 font-bold text-gray-50" for="email">Nouveau Mot de Passe</label>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <span class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>                          
                    </span>
                    <input type="password" id="password" name="password"class="w-full py-4 text-gray-900 text-md font-bold  rounded-r-md block  px-2.5 outline-none  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "  placeholder="********"  required>
                </div>
            </div>
            <div class="w-[90%] mx-auto">
                <label class="block mb-2 font-bold text-gray-50 " for="password">Confirmer Le Nouveau Mot de Passe</label>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <span class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>                          
                    </span>
                    <input type="password" id="password" name="password"class="w-full py-4 text-gray-900 text-md font-bold  rounded-r-md block  px-2.5 outline-none  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="********" required >
                </div>
            </div>
            <div class="w-[90%] mx-auto flex justify-center items-center">
                <input type="submit" name="login" id="login" class="w-full bg-blue-700 hover:bg-blue-800 rounded-lg text-white font-bold py-3 cursor-pointer" value="Mettre à jour">
            </div>
       </form>
     </div>
</div>