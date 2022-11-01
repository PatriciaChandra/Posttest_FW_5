<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Tambah Data Saham</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

        

    <div class="container mt">
        <form action="/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="tipe_cake" class="form-label">Tipe Cake</label>

                <input type="text" class="form-control @error('tipe_cake') is-invalid @enderror" id="tipe_cake" name="tipe_cake"
                    placeholder="tipe_cake" required>

                @error('tipe_cake')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="banyak_layer" class="form-label">Banyak Layer</label>
            <input type="text" class="form-control @error('banyak_layer') is-invalid @enderror" id="banyak_layer" name="banyak_layer" placeholder="banyak_layer" required>
            @error('banyak_layer')<div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="ukuran_cake" class="form-label">ukuran_cake</label>
                <input type="text" class="form-control @error('ukuran_cake') is-invalid @enderror" id="ukuran_cake" name="ukuran_cake" placeholder="ukuran_cake" required>

                @error('ukuran_cake')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah_lilin" class="form-label">Jumlah Lilin</label>
                <input type="text" class="form-control @error('jumlah_lilin') is-invalid @enderror" id="jumlah_lilin" name="jumlah_lilin" placeholder="jumlah_lilin" required>

                @error('jumlah_lilin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pesan_pada_cake" class="form-label">Pesan Pada Cake</label>
                <input type="text" class="form-control @error('pesan_pada_cake') is-invalid @enderror" id="pesan_pada_cake" name="pesan_pada_cake" placeholder="pesan_pada_cake" required>

                @error('pesan_pada_cake')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="menu_id" class="form-label">Harga</label>
                <select name="menu_id" id="menu_id" class="form-select @error('menu_id') is-invalid @enderror" aria-label="Default select example">
                    <option value="" selected disabled>Pilih Harga</option>
                    @foreach ($menus as $m)
                        <option value={{ $m->id }}>{{ $m->harga }}</option>
                    @endforeach
                </select>

                @error('menu_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <butt   on type="submit" class="btn btn-success">Tambah</butt>
            </div>
        </form>
    </div>
</body>
</html>