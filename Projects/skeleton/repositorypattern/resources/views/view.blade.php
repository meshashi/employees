<html>
   
   <head>
      <title>View</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Designation</td>
            <td colspan="2">Edit</td>
         </tr>
         @foreach ($employees as $employee)
         <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->designation }}</td>
            <td><a href = 'update/{{ $employee->id }}'>Update</a></td>
            <td><a href = 'delete/{{ $employee->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>
