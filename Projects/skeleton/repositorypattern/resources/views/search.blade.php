<html>

   <head>
      <title>Search</title>
   </head>
   
   <body>
       
       @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
       
        @endif
       
      <form action = "/show" method = "post">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>id</td>
               <td><input type='text' name='id' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Search"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>
