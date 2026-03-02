<x-layout>
    <main class="py-10">
        <h1>Faça login</h1>
        <section class="mt-4">
            <form action="/login" method="POST">
                @csrf

                @error('email')
                    <p class="text-red-500 text-xl mt-1"> {{ $message }} </p>
                @enderror

                <input type="email" class="bg-white p-2 border-2" name="email" placeholder="your@email.com">
                <input type="password" class="bg-white p-2 border-2" name="password" placeholder="********">
                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>
