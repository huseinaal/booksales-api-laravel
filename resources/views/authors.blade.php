<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Books</title>
</head>
<body>
    <h1>Sealamat Datang di Author Buku</h1>

    @foreach ($authors as $item)
    <ul>
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['description'] }}</li>
    </ul>
        
    @endforeach
    
</body>
</html>