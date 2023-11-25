<nav class="py-4 px-4 bg-pink1" x-data="{navOpen :true}">
    <div class="container bg-red1 mx-auto ">
        <div class="flex justify-between items-center">
            <img class="w-46 h-10 order-1 sm:order-2" src="{{ url('../storage/Assets/jagomain.png') }}" alt="logo">
            <img @click="navOpen=!navOpen" class="w-7 h-7 order-2 sm:order-1 lg:hidden" src="{{ url('../Assets/apps.svg') }}" alt="menu">
            <div class="order-2 hidden lg:block">
                <ul class="flex gap-16">
                    <li class="text-white font-semibold text-sm "><a href="">Home</a></li>
                    <li class="text-white font-semibold text-sm "><a href="">Latest</a></li>
                    <li class="text-white font-semibold text-sm "><a href="">Features</a></li>
                    <li class="text-white font-semibold text-sm "><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="order-3 hidden sm:block">
                <button class="grow bg-white text-dark py-2 px-8 rounded-full gap-4"><a href="{{ route('login') }}">Log In</a></button>
                <button class="grow bg-pink1 text-white py-2 px-8 rounded-full gap-4"><a href="{{ route('register') }}"></a>Sign Up</button>
            </div>
        </div>
    </div>
    <div x-show="navOpen" x-data="{open : false}" 
    class="fixed bottom-0 right-0 left-0 bg-pink1 p-2 shadow-sm lg:hidden
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    ">
        <ul class="flex justify-between items-center">
            <li>
                <button href="{{ url('home') }}" class="flex justify-center flex-col items-center gap-1">
                    <img class="w-4 h-4" src="{{ url('../Assets/home.svg') }}" alt="">
                    <span class="text-sm font-semibold">Home</span>
                </button>
            </li>
            <li>
                <button href="" class="flex justify-center flex-col items-center gap-1">
                    <img class="w-4 h-4" src="{{ url('../Assets/home.svg') }}" alt="">
                    <span class="text-sm font-semibold">Latest</span>
                </button>
            </li>
            <li>
                <button href="" class="flex justify-center flex-col items-center gap-1">
                    <img class="w-4 h-4" src="{{ url('../Assets/home.svg') }}" alt="">
                    <span class="text-sm font-semibold">Features</span>
                </button>
            </li>
            <li>
                <button href="" class="flex justify-center flex-col items-center gap-1">
                    <img class="w-4 h-4" src="{{ url('../Assets/home.svg') }}" alt="">
                    <span class="text-sm font-semibold">Article</span>
                </button>
            </li>
            <li>
                <button href="" @click="open = !open" class="flex justify-center flex-col items-center gap-1">
                    <img class="w-4 h-4" src="{{ url('../Assets/home.svg') }}" alt="">
                    <span class="text-sm font-semibold">More</span>
                </button>
            </li>
        </ul>
        <div x-show="open" 
        class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        ">
            <button class="grow bg-white text-dark py-4 px-8 rounded-full gap-4">Login</button>
            <button class="grow bg-pink1 text-white py-4 px-8 rounded-full gap-4">Sign Up</button>
        </div>
    </div>
</nav>