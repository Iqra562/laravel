<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Student Name</h1>
    @foreach ($data as $id=>$std)
   <h4>
    {{$std->std_name}};
    {{$std->city}};
    {{$std->class}};
   </h4> 
    @endforeach
</body>
</html>