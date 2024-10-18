<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Data Pegawai</title>
  </head>

  <body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <!-- Tambahkan kelas border untuk outline -->
          <div class="card border-dark mb-3">
            <div class="card-body">
              <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" required value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                  <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jeniskelamin" id="jeniskelamin" required>
                    <option selected disabled>{{ $data->jeniskelamin }}</option>
                    <option value="cowo">Cowo</option>
                    <option value="cewe">Cewe</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="notelpon" class="form-label">No Telpon</label>
                  <input type="number" name="notelpon" class="form-control" id="notelpon" required value="{{ $data->notelpon }}">
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>   
      </div>
    </div>  

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

