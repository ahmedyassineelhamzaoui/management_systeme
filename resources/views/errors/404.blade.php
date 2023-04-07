@include('layouts.authHead')
<div class="w-full h-screen">
    <div class="container flex justify-center items-center text-center h-full">
        <div class="">
            <div class="">
                <div class="">
                    <h1 class="text-[130px] text-green-500">404</h1>
                    <h3 class="font-bold">The page you were looking for is not found!</h3>
                    <p class="font-bold mb-4">You may have mistyped the address or the page may have moved.</p>
                    <div>
                        <a href="{{route('index')}}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500" href="index.html">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>