<h3>FORMULARIO</h3>
<form action='{{route("user.update", $cliente['id'])}}' method='post'>
    @csrf 
    @method('put');
    <input type='text' name='nome' value='{{$cliente['nome']}}'>
    <input type='submit' name='Salvar'>
</form>