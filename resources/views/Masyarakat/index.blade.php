<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" borderspacing="0">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TELPON</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bebas as $item)
                <tr>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->telpon}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>