<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
            <h1 class="font-bold text-3xl">Faça login</h1>
            <p>Insira seus dados para acessar</p>
            <form action="/login" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                    <p class="text-red-500 text-xl mt-1"> {{ $message }} </p>
                @enderror
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">E-mail</label>
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

                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>
