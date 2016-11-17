<html>

   <head>
      <title>update</title>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
   </head>
   
   <body>
       
        @if (count($errors) > 0)
       
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
       
        @endif
       
      <form action = "/edit/{{ $data->id }}" method = "post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='name' value="{{ $data->name }}" /></td>
            </tr>
            <tr>
               <td>Designation</td>
               <td><input type='text' name='designation' value="{{ $data->designation}}"/></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "update"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>