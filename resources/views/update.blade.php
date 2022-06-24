<div class="p2">
    <div class="form-group mb-3">
        <input type="text" name="buku" id="buku" class="form-control "placeholder="Judul Buku" required value="{{ $book->buku }}" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="penulis" id="penulis" class="form-control " placeholder="Penulis" required value="{{ $book->penulis }}" autocomplete="off" >
    </div>
    <div class="form-group mb-3">
        <input type="text" name="penerbit" id="penerbit" class="form-control " placeholder="Penerbit" required value="{{ $book->penerbit }}" autocomplete="off" >
    </div>
    <div class="form-group mt-1">
    <button class="badge rounded-pill text-bg-success" onClick="update({{ $book->id }})">Update Data</button>
    </div>
</div>
