@foreach($usuario->about as $about)
<form action="{{ route('about.update', $about) }}"
                    enctype="multipart/form-data"
                    method="POST">

                    <div class="row">
                            <div class="col-md-2">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Título About me
                                </label>
                                <input id="titulo" type="text"  name="titulo" class="form-control" value="{{ old('titulo', $about->titulo) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Descripcion
                                </label>
                                <input id="about" type="text"  name="about" class="form-control" value="{{ old('about', $about->about) }}">
                            @error('name')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Titulo CV
                                </label>
                                <input id="boton" type="text"  name="boton" class="form-control" value="{{ old('boton', $about->boton) }}">
                            @error('title_job')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Titulo What I Do
                                </label>
                                <input id="whatido" type="text"  name="whatido" class="form-control" value="{{ old('whatido', $about->whatido) }}">
                            @error('whatido')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            

                            <div class="col-md">
                                @if($about->image_about)
                                    <img src="{{ old('file_about', $about->get_image) }}" class="img-fluid">
                                    @else
                                        <img src="https://picsum.photos/400/200/" class="card-img-top" alt="Card image cap">
                                    @endif
                                <input type="file" name="file_about">
                                @error('file_about')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md">
                                @if($about->cv != '')
                                    <p class="mt-3">Ya hay un CV subido</p>
                                    @else
                                        <p class="mt-3">No hay ningún archivo subido</p>
                                    @endif
                                <input type="file" name="cv">
                                @error('cv')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    </div>
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-info">Guardar Cambios</button>
        </form>
@endforeach

