@include('layouts.authHead')
<div class="w-full h-screen">
    <div class="container flex justify-center items-center text-center h-full">
        <div class="">
            <div class="">
                <div class="">
                    <h1 class="text-[130px] text-green-500">403</h1>
                    <h3 class="font-bold">Forbidden Error!</h3>
                    <p class="font-bold mb-4">Permission not allowd.</p>
                    <div>
                        <a href="{{route('index')}}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500" >Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>