<form action="{{ route('skill.store') }}" method="POST">
    <div class="form-row">
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Crear Habilidad</label>
            <input id="name" type="text" name="name" class="form-control" placeholder="Agregar habilidad">
            <input type="hidden" name="user_id" value="{{ $usuario->id }}">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Porcentaje de Habilidad</label>
            <input id="percent" type="text" name="percent" class="form-control" placeholder="Porcentaje de habilidad %">
        </div>
    </div>
    @csrf
        <div class="mt-2 mb-2">
            <button type="submit" class="site-btn btn btn-info">Crear</button>
    </div>
</form>