<h3 class = "text-center mb-3">Titulos </h3>
   <div class = "table-responsive"> 
  <br>
   <div class="d-flex border-bottom mb-3">
      <div class="me-auto p-2">
          <h1 class="text-left fs-4">Lista Títulos registrados </h3>
      </div>
  </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name </th>
          <th scope="col">hp </th>
          <th scope="col">atack</th>
          <th scope="col">defense</th>
        </tr>
      </thead>

      <tbody>
          @foreach($pokemons as $poke)

                <tr scope="row">

                    <td>{{ $poke['id']}}</td>
                    <td>{{ $poke['name']}}</td>
                    <td>{{ $poke['hp'] }}</td>
                    <td>{{ $poke['atack']}}</td>
                    <td>{{ $poke['defense']}}</td>
                <td>

        @endforeach
      </tbody>
    </table>
</div>
