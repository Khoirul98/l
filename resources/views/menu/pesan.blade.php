<!DOCTYPE html>
<html>
    <head>
        <title>Pesan Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-info  bg-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pesan Menu</a>
                        </li>
                    </ul>
                </div>
            </nav>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-info" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-block btn-info float-center" data-toggle="modal" data-target="#exampleModal">
                Pesan Menu
                </button>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan Menu Anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/menu/create" method="POST">
                        {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">KODE MEJA ANDA</label>
                    <select name="Kode_Meja" class="form-control" id="exampleFormControlSelect1">
                    <option>KODE A</option>
                    <option>KODE B</option>
                    <option>KODE C</option>
                    <option>KODE D</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pelanggan</label>
                        <input name="Nama_Pelanggan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Pelanggan">
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Silahkan Pilih Menu Pesanan Anda</label>
                    <select name="Menu_Bebek" class="form-control" id="exampleFormControlSelect1">
                    <option>BEBEK LOMBOK IJO (40.000)</option>
                    <option>BEBEK PUTRI MADURA (50.000)</option>
                    <option>BEBEK RICA-RICA (35.000)</option>
                    <option>BEBEK SAMBEL KOREK (30.000)</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input name="Total" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah">
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Silahkan Pilih Minuman Anda</label>
                    <select name="Minuman" class="form-control" id="exampleFormControlSelect1">
                    <option>TEH ANGET (5.000)</option>
                    <option>JERUK ANGET (5.000)</option>
                    <option>ES TEH (5.000)</option>
                    <option>ES JERUK (5.000)</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input name="Jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jumlah">
                    </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Pesan</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>