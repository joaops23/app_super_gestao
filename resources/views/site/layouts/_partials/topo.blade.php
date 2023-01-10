<div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}"> <!-- o helper asset localiza a princípio no diretório public, assets são "atributos" do projeto --> 
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</div>
