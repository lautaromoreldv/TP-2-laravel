<form action="{{ route('education.store') }}" method="POST">
    <div class="form-row">
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Nombre del establecimiento</label>
            <input id="school_name" type="text"  name="school_name" class="form-control"> 
            <input type="hidden" name="user_id" value="{{ $usuario->id }}">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Título
            </label>
            <input id="degree" type="text"  name="degree" class="form-control">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" > Inicio
            </label>
            <input id="start_date" type="date"  name="start_date" class="form-control">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" > Fin
            </label>
            <input id="finish_date" type="date"  name="finish_date" class="form-control">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" > Descripcion
            </label>
            <input id="description" type="text"  name="description" class="form-control">
        </div>
    </div>
    @csrf
        <div class="mt-2 mb-2">
            <button type="submit" class="site-btn btn btn-info">Crear</button>
        </div>
</form>