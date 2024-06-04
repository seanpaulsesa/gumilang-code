<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Category</title>
</head>
<body>
   <h1>ini halaman category</h1>
   <table>
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
    </tr>

    @foreach ($categories as $category)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
    </tr>
    @endforeach
   </table>
</body>
</html>
