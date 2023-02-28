<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>

<body>
    <h1>
        Form Ubah Data
    </h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="post">
        @csrf
        @method('put')
        <table>
            <tr>
                <td>
                    <label for="kode">Kode</label>
                </td>
                <td>
                    <input type="text" id="kode" name="kode" value="{{ $barang->kode }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama" value="{{ $barang->nama }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="stok">Stok</label>
                </td>
                <td>
                    <input type="text" id="stok" name="stok" value="{{ $barang->stok }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga">Harga</label>
                </td>
                <td>
                    <input type="text" id="harga" name="harga" value="{{ $barang->harga }}">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Ubah</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
