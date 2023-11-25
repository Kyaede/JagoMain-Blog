@extends('template/index')
@extends('template/frontend/header')
@section('content')
{{-- hero section --}}
<section>
    <div class="container mx-auto p-4 flex justify-center">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 lg:col-span-8 order-2 lg:order-1">
                <button>
                    Check
                    <img class="w-4 h-4" src="{{ url('../storage/Assets/home.svg') }}" alt="">
                </button>
                <h1 class="font-bold text-[40px] leading-tight lg:text-left sm:justify-center sm:text-center ">Ingin
                    <span class="text-sky-500">Jago Main</span> Game ?
                </h1>
                <button>Get Started</button>
            </div>

            <div class="col-span-12 lg:col-span-4 order-1 lg:order-2">
                <img class="justify-end w-[500px] h-[400px]" src="{{ url('../storage/Assets/beluga 3.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

{{-- article section --}}
<section class="py-16">
    <div class="container mx-auto p-4 flex items-center justify-center">
        <div class="grid grid-cols-12 mx-auto">
            <div class="col-span-4 flex-col gap-4">
                <span class="text-red font-bold leading-tight">Top Blog</span>
                <h1 class="font-bold text-5xl leading-tight">Our top articles for you</h1>
            </div>
            <div class="col-span-8">

            </div>
        </div>
    </div>
</section>

<!-- component -->
<section>
    <div class="container mx-auto flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
            <div class=" flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
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
@endsection