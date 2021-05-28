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
      <div class="p-2">
         <h3 class="mt-2 text-center"><b>CRUD MATAKULIAH - UTS</b></h3>
         <p>Rizky Dipahiyat Alghipari</p>
         <p>20190801093</p>
         <p>Pemrograman Web - KJ002</p>
         <a href="{{ route('create') }}" class="btn btn-primary">Tambah</a>
         @if (session('success'))
            <div class="mt-2 alert alert-success">{{ session('success') }}</div>
         @endif
         <table class="table mt-2">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Nama MK</th>
                <th scope="col">Dosen</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($matkuls as $matkul)
               <tr>
                  <td>{{ $matkuls->count() * ($matkuls->currentPage() - 1) + $loop->iteration }}</td>
                  <td>{{ $matkul->kode_mk }}</td>
                  <td>{{ $matkul->nama_mk }}</td>
                  <td>{{ $matkul->dosen }}</td>
                  <td>
                     <form action="{{ url('delete', $matkul->id) }}" method="POST">
                        <a href="{{ route('edit', $matkul) }}" class="btn btn-primary">Edit</a>
                     @csrf
                     @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                     </form>
                  </td> 
               </tr>    
              @endforeach
            </tbody>
          </table>
          {{ $matkuls->links() }}
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>