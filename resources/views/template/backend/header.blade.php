<div class="hero gap-56 p-50 my-7">
    <nav class="flex justify-center gap-7">
        <h2 class="logo justify-items-center">
            <img src="{{ url('../storage/Assets/beluga 3.png') }}" alt="logo" height="40px" width="30px" />
        </h2>
        <ul class="navlist flex gap-7 bg-slate-300 rounded-xl px-6 py-1 shadow-lg">
            <li><a href="#course">Articles</a></li>
            <li><a href="#content">Users</a></li>
            <li><a href="#our">Statistik</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="dflex" role="search">
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    @csrf
                    @method('DELETE')
                </form>
            </li>
        </ul>
    </nav>
</div>
