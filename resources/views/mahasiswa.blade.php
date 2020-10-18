<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <th>#</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Nomor Hp</th>
        </tr>
        @foreach ($mahasiswa as $data)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->prodi }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->nomor_hp }}</td>
        @endforeach
    </table>

</body>
</html>
