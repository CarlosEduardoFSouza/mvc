@extends('app')

@session('content')

        <h1 class="mb-5">
            Buscar CEP
        </h1>
        <form action="{{route('buscar'}}" method="GET">
            <div class="form-group">
                <label>Cep</label>
                <input type="text" class="form-control" name="cep"></input>
            </div>
            <button type="submit" class="btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
@endsection 
