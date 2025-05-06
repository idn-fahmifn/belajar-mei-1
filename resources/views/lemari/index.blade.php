<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Lemari</title>

    <style>
        table, thead, tbody, th, tr, td {
            border: 1px solid #00000;
            width: 80%;
            border-colapse:colapse;
        }
    </style>
    
</head>
<body>
    <h1>Data lemari</h1>
    <span>Lemari yang ada di kantor</span>

    <table>
        <thead>
            <th>Nama Lemari</th>
            <th>Deskripsi</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama_lemari}}</td>
                    <td>{{$item->deskripsi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>