<form action="{{ route('usuario.update', $usuario) }}"
                    enctype="multipart/form-data"
                    method="POST">

                    <div class="row">
                            <div class="col-md-12">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Título Professional Skills
                                </label>
                                <input id="pro" type="text"  name="pro" class="form-control" value="{{ old('pro', $usuario->pro) }}">

                                 <!--inputs del usuario en hidden asi no tira error al actualizar un dato que es del usuario pero es para cambiar el titulo del titulo Professional Skills-->
                                <input id="name" type="hidden"  name="name" class="form-control" value="{{ old('name', $usuario->name) }}">
                                <input id="title_job" type="hidden"  name="title_job" class="form-control" value="{{ old('title_job', $usuario->title_job) }}">
                                <input id="email" type="hidden"  name="email" class="form-control" value="{{ old('email', $usuario->email) }}">
                                <input id="tel" type="hidden"  name="tel" class="form-control" value="{{ old('tel', $usuario->tel) }}">
                            </div>
                    </div>
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-info">Guardar Cambios</button>
        </form>

