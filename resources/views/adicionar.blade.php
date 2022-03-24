@extends('app')

@session('content')

        <h1 class="mb-5">
            Adicionar CEP
        </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('buscar'}}" method="POST">
            @csrf 
            <div class="form-group">
                <label>Cep</label>
                <input type="text" class="form-control" name="cep" value="{{$cep}}"></input>
            </div>
            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="LogradouroNumero" value="{{$logradouro}}"></input>
            </div>
            <div class="form-group">
                <label>Numero</label>
                <input type="text" class="form-control" name="Numero"></input>
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" name="Bairro" value="{{$bairro}}"></input>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="Cidade" value="{{$cidade}}"></input>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" name="Estado" value="{{$estado}}"></input>
            </div>
            <button type="submit" class="btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>
@endsection