
<form action="{{ route('usuario.update', $usuario) }}"
                    method="POST">

                    <div class="row">
                            <div class="col-md-12">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Título Technical Skills
                                </label>
                                <input id="tec" type="text"  name="tec" class="form-control" value="{{ old('tec', $usuario->tec) }}">
                            </div>
                    </div>
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-info">Guardar Cambios</button>
        </form>
