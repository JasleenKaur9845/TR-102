<html>
<head>
    <title>FORMS</title>
    <link rel="stylesheet" href="cssss.css">
    <body>
        <form action="php2.php" method="POST">
          <center>  <table cell padding="5">
            <tr>
                <td>Name: 
                <td><input type="text" name="name">
                
                </td>
            </tr>
            <tr>
                <td>    Contact: 
                    <td><input type="number" name="contact">
                </td>
            </tr>
            <tr>
                <td>        Password: 
                        <td><input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                            Email:
                            <td><input type="email" name="email">
                </td>
            </tr>
            <tr>
                    <td>        Gender:
                                <td><input type="radio" name="gender" value="male">Male<br>
                                <td><input type="radio" name="gender" value="female">Female<br>
                    </td>
            </tr>
            <tr>
                <td>
                                    Terms&Condition: 
                                    <td><input type="checkbox" name="permission">
                </td>
            </tr>

                                <tr>
                                    <td>
                                    Date: 
                                    <td><input type="date" name="date" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Branch:
                                        <td>
                                            
  <select name="cars" id="cars">
    <option value="cse">cse</option>
    <option value="it">it</option>
    <option value="ece">ece</option>
    <option value="me">me</option>
  </select>
                                        </td>

                                        </td>                               
                                     </table>
                                        <input type="submit" name="submit">
                                        
</body>
</html>                                      
                


