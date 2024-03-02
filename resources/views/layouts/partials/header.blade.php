<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <span class="text-yellow-500 text-xl">Instince</span> Code
        </div>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">

              


            </div>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @guest()
            @include('layouts.partials.header-right-guest')
        @endguest


        @auth()
@include('layouts.partials.header-right-auth')
        @endauth
    </div>
</header>