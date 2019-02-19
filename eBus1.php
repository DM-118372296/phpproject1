<?php?>

<html>
    
    <head>
        
        <title> Calculater </title>
        
        <script languge ="javascript" type="text/javascript">
            function packageTotal() (
                    var x = 5;
                    var y = 10;
                    var p = x + y * 12;
                    var b = y * 12 ;
                            
                    if(document.GetElementById('BasicProgram').checked)(
                            document.calcuater.total.value = b;
                            )
                    else if (document.getElementById("proProgram").checked)(
                            document.calculater.total.value = p;)
                            )
        </script>
     </head>
     <body>
         
         <form
             name="calculater"
             
             <br /> 
             <input type ="radio" name ="programType" id ="basicProgram" value ="basic" /> Basic
             <input type ="radio" name ="programType" id ="proProgram" value ="pro" /> Pro
             
             <br />
             Your Total Price is: <input type="text" name="total">
                                         
                                  <input type="button" value ="submit" onclick="javascript:packagetotal();">
         </form>
         
     </body>
    


</html>