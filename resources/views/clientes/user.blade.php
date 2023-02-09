<h3>Clientes</h3>
<a href='{{route('user.create')}}'>CRIAR NOVO CLIENTE</a>
<ul>
    @foreach ($clientes as $cliente){
        <li>{{$cliente['nome']}} |
            <a href='{{route('user.edit', $cliente['id'])}}'>EDITAR</a> |
            <a href='{{route('user.show', $cliente['id'])}}'>INFO</a>
            <form action='{{route("user.destroy", $cliente['id'])}}' method='post'>
                @csrf 
                @method('DELETE');
                <input type='submit' name='APAGAR'>
            </form>
        </li>
    }
        
    @endforeach
</ul>