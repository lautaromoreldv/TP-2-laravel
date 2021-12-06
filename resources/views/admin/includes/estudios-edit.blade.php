@foreach($usuario->education as $education)
                    <form action="{{ route('education.update', $education) }}"
                    method="POST">
                        <div class="form-row">
                            <div class="col-md">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Nombre del establecimiento
                                </label>
                                <input id="school_name" type="text"  name="school_name" class="form-control" value="{{ old('school_name', $education->school_name) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Título
                                </label>
                                <input id="degree" type="text"  name="degree" class="form-control" value="{{ old('degree', $education->degree) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Inicio
                                </label>
                                <input id="start_date" type="date"  name="start_date" class="form-control" value="{{ old('start_date', $education->start_date) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Fin
                                </label>
                                <input id="finish_date" type="date"  name="finish_date" class="form-control" value="{{ old('finish_date', $education->finish_date) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Descripcion
                                </label>
                                <input id="description" type="text"  name="description" class="form-control" value="{{ old('description', $education->description) }}">
                            </div>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-warning">Actualizar</button>
                        </div>
                    </form>

                    <form action="{{ route('education.destroy', $education) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>

                @endforeach