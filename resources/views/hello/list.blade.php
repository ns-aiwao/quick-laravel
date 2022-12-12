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
  <th>書名</th>
  <th>価格</th>
  <th>出版社</th>
  <th>刊行日</th>
</tr>
@each('subviews.book', $records, 'record', 'subviews.empty')
</table>
</body>
</html>

