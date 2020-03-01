@auth
<h4>Você está logado</h4>
<p> {{ Auth::user()->name }}</p>
<p> {{ Auth::user()->email }}</p>
<p> {{ Auth::user()->id }}</p>
@endauth

@guest
    <h2>Olá visitante! Você não está logado.</h2>
@endguest