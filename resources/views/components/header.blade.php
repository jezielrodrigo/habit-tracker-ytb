<header class="bg-white border-b-2 flex items-center justify-between p-4">
    {{-- LOGO --}}
    <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
        HT
    </a>

        {{-- GITHUB --}}
    <div>
        @auth
            <form class="inline" action="{{ route('auth.logout') }}" method="POST">
                @csrf

                <button class="p-2 habit-btn habit-shadow-lg">Sair</button>
            </form>
        @endauth

        @guest
          <div class="flex gap-2">
            <a href="{{ route('site.register') }}" class="habit-btn p-2 habit-shadow-lg ">Cadastrar</a>
            <a href="{{ route('site.login') }}" class="habit-btn p-2 habit-shadow-lg bg-habit-orange">Logar</a>
          </div>
        @endguest
    </div>
</header>
