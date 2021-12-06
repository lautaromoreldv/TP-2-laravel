<form action="{{ route('work.store') }}" method="POST">
    <div class="form-row">
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Trabajo</label>
            <input id="trabajo" type="text"  name="trabajo" class="form-control"> 
            <input type="hidden" name="user_id" value="{{ $usuario->id }}">
        </div>
        <div class="col-md">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Lugar de trabajo
            </label>
            <input id="lugar" type="text"  name="lugar" class="form-control">
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
            <label class="block text-gray-700 text-sm font-bold mb-2" >Eesponsabilidades
            </label>
            <input id="responsabilidades" type="text"  name="responsabilidades" class="form-control">
        </div>
    </div>
    @csrf
        <div class="mt-2 mb-2">
            <button type="submit" class="site-btn btn btn-info">Crear</button>
        </div>
</form>