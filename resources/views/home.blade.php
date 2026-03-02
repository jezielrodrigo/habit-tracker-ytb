
<h1>
    Welcome to the Home page
</h1>
<p> Seus hábitos são: </p>
<p> Olá, {{ $name }} </p>
<ul>
    @foreach ($habits as $item)
        <li>
            {{ $item }}
        </li>  
    @endforeach

</ul>

@auth
    <p>Logado</p>    
@endauth

@guest
    <p>Não esta logado</p>
@endguest