<section class="mx-auto" style="width: 15%">
    <h3 class="text-center">Men</h3>
    <table class="table table-warning table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($men as $item)
            <tr>
              <th scope="row">{{$item->id}} </th>
              <td>{{$item->nom}} </td>
              <td>{{$item->age}} </td>
              <td>{{$item->genre}} </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</section>