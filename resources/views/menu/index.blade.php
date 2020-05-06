<!DOCTYPE html>
<html>
    <head>
        <title>Data Pesanan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta http-equiv="refresh" content="3">
    </head>
    <body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-info" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <h1>DATA PESANAN</h1>
            <table class="table table-hover table-info">
                <tr>
                    <th>KODE MEJA</th>
                    <th>NAMA PELANGGAN</th>
                    <th>MENU PESANAN</th>
                    <th>JUMLAH </th>
                    <th>MINUMAN</th>
                    <th>JUMLAH</th>
                    <th>TOTAL PEMBAYARAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach($data_menu as $menu)
                <tr>
                    <td>{{$menu->Kode_Meja}}</td>
                    <td>{{$menu->Nama_Pelanggan}}</td>
                    <td>{{$menu->Menu_Bebek}}</td>
                    <td>{{$menu->Total}}</td>
                    <td>{{$menu->Minuman}}</td>
                    <td>{{$menu->Jumlah}}</td>
                    <td>{{$menu->Total_Bayar}}</td>
                    <td><a href="/menu/{{$menu->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Di Hapus?')">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
                </div>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>