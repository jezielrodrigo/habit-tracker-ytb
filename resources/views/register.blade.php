<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-3xl">Register-se</h1>
            <p>Preencha as informações para se cadastrar seus hábitos</p>
            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                    <p class="text-red-500 text-xl mt-1"> {{ $message }} </p>
                @enderror
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">Nome</label>
                    <input type="text" class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
                        name="name" placeholder="Seu nome">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Nome</label>
                    <input type="email" class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                        name="email" placeholder="your@email.com">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>
                    <input type="password" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                        name="password" placeholder="********">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">Repita a senha</label>
                    <input type="password" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                        name="password_confirmation" placeholder="********">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-white border-2 p-2">Cadastrar</button>
            </form>
            <p class="text-center mt-4">
                Já tem uma conta?
                <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">Faça login</a>
            </p>
        </section>
    </main>
</x-layout>
