<form action="{{ route('usuario.update', $usuario) }}"
                    enctype="multipart/form-data"
                    method="POST">

                    <div class="row">
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Saludo
                                </label>
                                <input id="excerpt" type="text"  name="excerpt" class="form-control" value="{{ old('excerpt', $usuario->excerpt) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Nombre
                                </label>
                                <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $usuario->name) }}">
                            @error('name')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Trabajo
                                </label>
                                <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $usuario->title_job) }}">
                            @error('title_job')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Email
                                </label>
                                <input id="email" type="text"  name="email" class="form-control" value="{{ old('email', $usuario->email) }}">
                            @error('email')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Teléfono
                                </label>
                                <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $usuario->tel) }}">
                            @error('tel')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Dirección
                                </label>
                                <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $usuario->address) }}">
                            @error('address')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                            <div class="col-md-6">
                                    <p class="mt-3">Redes sociales:</p>
                                    <label class="text-gray-700 text-sm font-bold mb-2" >Facebook</label>
                                    <input id="fb" type="text"  name="fb" class="form-control" value="{{ old('fb', $usuario->fb) }}">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >Twitter</label>
                                    <input id="tw" type="text"  name="tw" class="form-control" value="{{ old('tw', $usuario->tw) }}">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >Github</label>
                                    <input id="gh" type="text"  name="gh" class="form-control" value="{{ old('gh', $usuario->gh) }}">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >Dribble</label>
                                    <input id="db" type="text"  name="db" class="form-control" value="{{ old('db', $usuario->db) }}">
                            </div>

                            <div class="col-md-6 mt-3">
                                @if($usuario->image)
                                    <img src="{{ old('file', $usuario->get_image) }}" class="img-fluid">
                                    @else
                                        <img src="https://picsum.photos/400/200/" class="card-img-top" alt="Card image cap">
                                    @endif
                                <input type="file" name="file" id="file">
                                @error('file')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                    </div>
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-info mt-3">Guardar Cambios</button>
        </form>
    
                    <!--<div class="col-8">
                        <form action="{{ route('usuario.update', $usuario) }}"
                        method="POST">
                                
                        @csrf
                        @method('PUT')

                        <button type="submit" class="btn btn-info mt-3 mb-3">Actualizar</button>
                        </form>
                    </div>
                </div>-->
                