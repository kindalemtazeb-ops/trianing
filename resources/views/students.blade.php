<!DOCTYPE html>
<head>
    <title>Students List</title>
    <style>
    table,th,tr{
border-collapse: collapse;

border-radius:10px;
padding:10px;
marign:10px;
    }
    </style>
</head>
<body>
    <table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>departement</th>
        <th>gpa</th>
        <th>action</th>
    </tr>
    <!--@foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{$student->departement}}</td>
        <td>{{$student->gpa}}</td>
        <td>{{$student->action}}</td>
    </tr>
    @endforeach-->
</table>
</body>
</html>
