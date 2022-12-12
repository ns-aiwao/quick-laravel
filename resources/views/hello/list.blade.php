<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>速習Laravel</title>
<link rel="stylesheet" href="https://csn.jsdeilvr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table">
<tr>
  <th>No.</th>
  <th>署名</th>
  <th>価格</th>
  <th>出版社</th>
  <th>刊行日</th>
</tr>
@foreach ($records as $id=>$record)
<tr>
  <td>{{ $id + 1 }}</td>
  <td>{{ $record->title }}</td>
  <td>{{ $record->price }}</td>
  <td>{{ $record->publisher }}</td>
  <td>{{ $record->published }}</td>
</tr>
@endforeach
</table>
</body>
</html>

