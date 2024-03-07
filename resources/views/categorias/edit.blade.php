@extends('main')

@section('title', 'Editar Categoria')

@section('content')
    <a class="btn mx-2" href="{{ route('categorias.index') }}" style="background-color: transparent; font-size: 50px; color: #413f3d"><-</a>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br/>
    @endif

    <form class="d-flex flex-column" action="{{ route("categorias.update", $categoria->id) }}" method="post" style="border-top: 2px solid #413f3d; padding: 20px">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col d-flex flex-column" style="border-left: 2px solid coral">
                <h5>Actualiza la categoria</h5>
                <p>(*) Campo obligatorio</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4 d-flex flex-column">
                <label for="nombre" class="form-control-sm">(*)Nombre</label>
                <input class="form-control form-control-sm" id="nombre" name="nombre" type="text" required value="{{$categoria->nombre}}" style="width: 100%">
            </div>
        </div>
        <br>
        <div>
            <button class="btn" type="submit" style="background-color: coral; color: white">Actualizar</button>
        </div>
    </form>

@endsection
