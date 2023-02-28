<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>

<body>
    <h1>
        Form Tambah Data
    </h1>

    <form action="{{ route('barang.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    <label for="kode">Kode</label>
                </td>
                <td>
                    <input type="text" id="kode" name="kode" autofocus>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="stok">Stok</label>
                </td>
                <td>
                    <input type="text" id="stok" name="stok">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga">Harga</label>
                </td>
                <td>
                    <input type="text" id="harga" name="harga">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
