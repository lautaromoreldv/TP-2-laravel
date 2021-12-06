@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        @foreach ($users as $user)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                @if($user->image)
                    <img src="{{ $user->get_image }}" class="card-img-top" alt="{{ $user->name }}">
                    @else
                        <img src="https://picsum.photos/400/200/" class="card-img-top" alt="Card image cap">
                    @endif
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->title_job }}</p>
                <form action="{{ route('usuario.destroy', $user) }}" method="POST">
                    <a href="{{ route('usuario.edit', $user) }}" class="btn btn-outline-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <input
                        type="submit"
                        value="Eliminar"
                        class="btn btn-outline-danger"
                        onclick="return confirm('¿Delea eliminar este usuario...?')"
                    />
                </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
