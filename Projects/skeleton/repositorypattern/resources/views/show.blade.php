
<html>
   
   <head>
      <title>Show</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Designation</td>
            <td colspan="2">Edit</td>
         </tr>
        
         <tr>
            <td>{{ $employees->id }}</td>
            <td>{{ $employees->name }}</td>
            <td>{{ $employees->designation }}</td>
            <td><a href = 'update/{{ $employees->id }}'>Update</a></td>
            <td><a href = 'delete/{{ $employees->id }}'>Delete</a></td>
         </tr>
         
      </table>
   
   </body>
</html>
