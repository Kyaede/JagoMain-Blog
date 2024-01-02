@extends('template/index')
@extends('template/frontend/header')
@section('content')
{{-- hero section --}}
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Ingin
                <span class="text-pink1">Jago Main</span> Game ?</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Telusuri Artikel Game Mu Bersama Kami! Temukan Nama Game Yang Anda Cari, Bergabunglah dengan Komunitas, dan Peroleh Info Terbaru Mengenai Game Anda!.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img class="w-[550px] h-[550px]" src="{{ url('../storage/Assets/beluga 3.png') }}" alt="beluga">
        </div>                
    </div>
</section>

{{-- <section>
    <div class="container mx-auto p-4 flex justify-center">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 lg:col-span-8 order-2 lg:order-1">
                <button>
                    Check
                    <img class="w-4 h-4" src="{{ url('../storage/Assets/home.svg') }}" alt="">
                </button>
                <h1 class="font-bold text-[40px] leading-tight lg:text-left sm:justify-center sm:text-center ">Ingin
                    <span class="text-pink1">Jago Main</span> Game ?
                </h1>
                <button>Get Started</button>
            </div>

            <div class="col-span-12 lg:col-span-4 order-1 lg:order-2">
                <img class="justify-end w-[500px] h-[400px]" src="{{ url('../storage/Assets/beluga 3.png') }}" alt="">
            </div>
        </div>
    </div>
</section> --}}

{{-- article section --}}
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto p-4 flex items-center justify-center">
        <div class="grid grid-cols-12 mx-auto">
            <div class="col-span-4 flex-col gap-4 text-white">
                <span class="text-red font-bold leading-tight">Top Blog</span>
                <h1 class="font-bold text-5xl leading-tight">Our top articles for you</h1>
            </div>
            <div class="col-span-8">

            </div>
        </div>
    </div>
</section>

<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="container mx-auto flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
            <div class=" flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border mt-6">
                <div
                    class=" h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
                    <img src="{{asset('/storage/posts/'.$post->image) }}" alt="img-blur-shadow" layout="fill" />
                </div>
                <div class="p-6">
                    <h5
                        class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        {{ $post->title }}
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk
                        and near to "Naviglio" where you can enjoy the main night life in
                        Barcelona.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{ route('posts.show',$post->id) }}"
                        class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button" data-ripple-light="true">
                        Read More
                    </a>
                </div>
            </div>
            @endforeach
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</section>
@include('template/footer')
@endsection