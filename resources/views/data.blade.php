<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Students list</h2>
<table border="1" cellpadding="10">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
</tr>

@foreach ( $get as $studentdata)
<tr>
<td>{{$studentdata->id}}</td>
<td>{{$studentdata->name}}</td>
<td>{{$studentdata->password}}</td>
<td>{{$studentdata->cpassword}}</td>
</tr>

@endforeach
</table>
</body>
</html>
