<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Matkul UTS</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
   <div class="container table-bordered mt-5">
      <div class="p-2 mt-2">
         <a href="{{ route('matkul') }}" class="btn btn-dark">Back</a>
         @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
         @endif
         <form action="{{ route('edit', $matkul) }}" method="POST" class="mt-2">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="kode_mk">Kode MK</label>
              <input type="text" name="kode_mk" value="{{ old('kode_mk') ?? $matkul->kode_mk }}" id="kode_mk" class="form-control">
            </div>
            <div class="form-group">
              <label for="nama_mk">Nama MK</label>
              <input type="text" name="nama_mk" value="{{ old('nama_mk') ?? $matkul->nama_mk }}" id="nama_mk" class="form-control">
            </div>
            <div class="form-group">
              <label for="dosen">Dosen</label>
              <input type="text" name="dosen" value="{{ old('dosen') ?? $matkul->dosen }}" id="dosen" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
         </form>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>