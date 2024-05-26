<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="{{route('form-actionTagihan')}}">
        @csrf
        <label for="usage">Pemakaian Air (m3)</label>
        <input type="number" name="usage" id="usage">
        <button type="submit">Hitung Tagihan</button>
</form>
</body>
</html>