@foreach($usuario->proskill as $proskill)
                    <form action="{{ route('proskill.update', $proskill) }}"
                    method="POST">
                        <div class="form-row">
                            <div class="col-md">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Habilidad
                                </label>
                                <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $proskill->name) }}">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Porcentaje
                                </label>
                                <input id="percent" type="text"  name="percent" class="form-control" value="{{ old('percent', $proskill->percent) }}">
                            </div>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-warning">Actualizar</button>
                        </div>
                    </form>

                    <form action="{{ route('proskill.destroy', $proskill) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-2 mb-2">
                            <button type="submit" class="site-btn btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>

                @endforeach