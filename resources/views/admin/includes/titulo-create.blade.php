<form action="{{ route('titulo.store') }}" method="POST">
    <div class="form-row">
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Crear Titulo</label>
            <input id="titulo" type="text" name="titulo" class="form-control" placeholder="Agregar titulo">
            <input type="hidden" name="user_id" value="{{ $usuario->id }}">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Crear descripcion</label>
            <input id="descripcion" type="text" name="descripcion" class="form-control" placeholder="Descripcion">
        </div>
    </div>
    @csrf
        <div class="mt-2 mb-2">
            <button type="submit" class="site-btn btn btn-info">Crear</button>
    </div>
</form>