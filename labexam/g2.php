<html>
    <head>
        <style>
            body{
                background-color: blue;
                font-size:15px;

            }
            h1{
                font-family: arial;
                background-color: yellow;

            }
            table{
                font-size:20px;
                
            }</style>
            <script>
        function validation()
        {
            var w =document.forms["form2"]["name"].value;
            var x =document.forms["form2"]["price"].value;
           if(w=="")
           {
               alert("please enter the itemname!");
               return false;
           }

            if (x=="")
            {
               alert("please enter the price!"); 
               return false;
            }
            if(isNan(x))
            {

                  alert("please enter valid price");  
                  return false;

            }
            else{

                return true;

            }
             
        }


    </script>
            </head>
            <body><center><h1><u>ADD YOUR DETAILS</u></h1>
                <form action="g3.php" method="POST" name="form2"><table border="1" height="50%" width="50%">
                    <tr><th>
                    Name:</th><th><input type="text" name="itemname"></th></tr>
                    <tr><th>
                    Type:</th><th><select name="itype"><option name="itype">cooldrinks</option><option name="itype">hotdrinks</option><option name="itype">others</option></select></th></tr>
                    <tr><th>
                    Quantity:</th><th><input type="text" name="quantity"></th></tr><tr><th>
                    Price:</th><th><input type="text" name="price"></th></tr><tr><th>
                    <input type="submit" name="s1" value="save" onclick=" return validation()">
                    </th>

                     
                    <th>
                    <input type="submit" name="s2" value="show details"/></th></tr>
                </center>
        </form>
        </body>
        </html>