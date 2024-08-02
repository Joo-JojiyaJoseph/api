<x-layout>
    <!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>
    <h1>Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>{{ $employee['id'] }} - {{ $employee['name'] }} - {{ $employee['email'] }}</li>
        @endforeach
    </ul>
</body>
</html>

</x-layout>
