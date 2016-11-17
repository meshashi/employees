<html>

   <head>
      <title>Add</title>
   </head>
   
   <body>
       
       @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
       
        @endif
       
      <form action = "/insert" method = "post">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='name' /></td>
            </tr>
            <tr>
               <td>Designation</td>
               <td><input type='text' name='designation' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>