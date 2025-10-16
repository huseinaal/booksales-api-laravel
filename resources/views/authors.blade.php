<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Penulis (Author)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Negara</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['country'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>