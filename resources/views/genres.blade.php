<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre['id'] }}</td>
                    <td>{{ $genre['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>