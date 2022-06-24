<table class="table table-striped table-hover">


    <thead>
        <tr>
            <thead class="table-dark">
            <th scope="col">Id</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($books as $book)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->buku }}</td>
              <td>{{ $book->penulis }}</td>
              <td>{{ $book->penerbit }}</td>
              <td>
                  <button class="badge text-bg-info" onClick="show({{ $book->id }})">Update</button>
                  <button class="badge text-bg-danger" onClick="destroy({{ $book->id }})">Delete</button>
              </td>
            </tr>
     @endforeach
    </tbody>
</table>
