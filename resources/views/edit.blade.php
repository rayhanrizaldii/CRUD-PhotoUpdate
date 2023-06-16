<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Product</title>
</head>

<body>
    <div class="container-fluid">
        <form action="/ubah" method="post"   enctype="multipart/form-data">
            @csrf
            <!-- hidden id -->
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}" aria-describedby="emailHelp">
            <!-- end hidden id -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{$data->nama}}" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" value="{{$data->harga}}" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="photo" name="photo" value="{{$data->photo}}">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>