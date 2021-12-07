@foreach($usuario->trabajo as $work)
                    <form action="{{ route('trabajo.update', $work) }}"
                    method="POST">
                        <div class="form-row">
                            <div class="col-md">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Nombre del trabajo
                                </label>
                                <input id="trabajo" type="text"  name="trabajo" class="form-control" value="{{ old('trabajo', $work->trabajo) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Lugar de trabajo
                                </label>
                                <input id="lugar" type="text"  name="lugar" class="form-control" value="{{ old('lugar', $work->lugar) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Inicio
                                </label>
                                <input id="start_date" type="date"  name="start_date" class="form-control" value="{{ old('start_date', $work->start_date) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Fin
                                </label>
                                <input id="finish_date" type="date"  name="finish_date" class="form-control" value="{{ old('finish_date', $work->finish_date) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Responsabilidades
                                </label>
                                <input id="responsabilidades" type="text"  name="responsabilidades" class="form-control" value="{{ old('description', $work->responsabilidades) }}">
                            </div>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-warning">Actualizar</button>
                        </div>
                    </form>

                    <form action="{{ route('trabajo.destroy', $work) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>

@endforeach