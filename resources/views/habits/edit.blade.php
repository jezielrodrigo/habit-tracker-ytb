<x-layout>
  <main class="py-10">
    <h1>
      Editar novo Hábito
    </h1>

    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
      <form action="{{ route('habits.update', $habit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2 mb-4">
          <label for="name">Nome do Hábito</label>
          <input type="text" class="bg-white p-2 border-2 @error('name') border-red-500 @enderror" name="name"
                 placeholder="Ex: Ler 10 página" value="{{ $habit->name }}">
          @error('name')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" class="bg-white border-2 p-2">Editar Hábito</button>
      </form>
    </section>
  </main>
</x-layout>
