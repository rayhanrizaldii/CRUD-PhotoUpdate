<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Product</title>
</head>

<body>
    <div class="home">
        <h3>TOKO DARING</h3>
        <h1>SEMOLOWARU 45</h1>
    </div>
    <div class="container">
        <a href="/add" class="btn btn-primary" style="float:right">Tambah Produk</a>
    </div>
    <div class="container">
        <div class="content">
            @foreach ($data as $item)
            <div class="card" style="width: 18rem;">
                <div class="container-fluid">
                    <img src="{{ asset('uploads/' . $item->photo) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text">Harga: Rp. {{ $item['harga'] }}</p>
                        <a href="/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                        <a href="/hapus/{{$item->id}}" class="btn btn-primary" style="float:right">Hapus</a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        {{$data->links()}}
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>