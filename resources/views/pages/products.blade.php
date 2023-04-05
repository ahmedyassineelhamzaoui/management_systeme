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
                <div class="flex w-full justify-end">
                    <button class="px-3 py-2 add-button rounded-md text-white flex items-center">
                        <span class="mr-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                               </svg>
                        </span>         
                        <span > add User</span>               
                    </button>
                </div>
                <div>
                    <h2 class="font-bold text-green">Users</h2>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray uppercase table-bg ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom
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
                            <tr class="border-b text-tablecolor ">
                                <th scope="row" class="px-6 py-4   whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    comercial
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    example@gmail.com
                                </td>
                                <td>
                                    ofline
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <span class="text-green-500 cursor-pointer" title="edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>                                                      
                                        </span>
                                        <span class="text-red-600 cursor-pointer" title="delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>                                                      
                                        </span>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr class="border-b text-tablecolor ">
                                <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                                    2
                                </th>
                                <td class="px-6 py-4">
                                    Administrateur
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    exemple@gmail.com
                                </td>
                                <td>
                                    Online
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <span class="text-green-500 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>                                                      
                                        </span>
                                        <span id="deleteButton" class="text-red-600 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>                                                      
                                        </span>
                                    </div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    {{-- delete user  --}}
    <div id="delet-modal" class="fixed z-50 hidden top-0 left-0 w-full h-full  items-center justify-center" style="background-color: rgba(0,0,0,0.5);">
        <div class="relative rounded-lg p-6 bg-white">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium">Delete Confirmation</h3>
                <button class="text-gray-500 font-medium cursor-pointer close-modal" id="close-deletedModal"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  </button>
            </div>
            <div class="mt-4">
                <p>Are you sure you want to delete this Category?</p>
            </div>
            <div class="flex justify-end mt-4">
                <form method="post">
                    <input type="hidden"  name="deleted-idConfirm" id="deleted-idConfirm">
                    <button type="button" class="px-4 py-2 rounded-md text-white bg-gray-600 close-modal"  >Cancel</button>
                    <button class="px-4 py-2 rounded-md text-white bg-red-600" type="submit" name="delete-category">Delete</button>
                </form>
            </div>
        </div>
    </div>
@include('layouts.dashboardFooter')


