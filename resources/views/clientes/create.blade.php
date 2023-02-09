<h3>FORMULARIO</h3>
<form action='{{route("user.store")}}' method='post'>
    @csrf 
    <input type='text' name='nome'>
    <input type='submit' name='Salvar'>
</form>