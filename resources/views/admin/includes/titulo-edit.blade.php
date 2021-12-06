@foreach($usuario->titulo as $titulo)
                    <form action="{{ route('titulo.update', $titulo) }}"
                    method="POST">

                        <div class="form-row">
                            <div class="col-md">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Título
                                </label>
                                <input id="titulo" type="text"  name="titulo" class="form-control" value="{{ old('titulo', $titulo->titulo) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Descripcion
                                </label>
                                <input id="descripcion" type="text"  name="descripcion" class="form-control" value="{{ old('descripcion', $titulo->descripcion) }}">
                            </div>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-warning">Actualizar</button>
                        </div>
                    </form>

                    <form action="{{ route('titulo.destroy', $titulo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>

@endforeach