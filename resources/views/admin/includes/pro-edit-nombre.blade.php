<form action="{{ route('usuario.update', $usuario) }}"
                    enctype="multipart/form-data"
                    method="POST">

                    <div class="row">
                            <div class="col-md-12">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Título Professional Skills
                                </label>
                                <input id="pro" type="text"  name="pro" class="form-control" value="{{ old('pro', $usuario->pro) }}">
                            </div>
                    </div>
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-info">Guardar Cambios</button>
        </form>

