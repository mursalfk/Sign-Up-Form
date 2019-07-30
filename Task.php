<html>
    <head>
        <title>Lab 3 | Task 3</title>
        <script src="Task.js"></script>
        <link rel="stylesheet" href="Task.css">
    </head>
    <body id="main">
        <div class=header2>
            <h2>Info. Retrieved</h2>
        </div>
        <form action="Task.php" method="GET" onsubmit="return checkForm(this);">
            <div class="main2">
            <table align="center" class="table2">
                <tr>
                    <th colspan=2>Hello <b><?php echo $_GET["first_name"] ?></b></th>
                </tr>
                <tr>
                    <td colspan=2>You have submitted the following information</td>
                </tr>
                <tr>
                    <td colspan="4"><div id="misc"><i><b>Personal Information</b></i></div></td>
                </tr>
                <tr><td><b>Full Name:</b></td>
                    <td><?php echo $_GET["first_name"]." ".$_GET["last_name"] ?></td>
                </tr>
               
                <tr>
                    <td colspan="4"><div id="misc"><i><b>Validation Details</b></i></div></td>
                </tr>
                <tr><td><b>Username:</b></td>
                    <td><?php echo $_GET["username"] ?></td>
                </tr>
                <tr>
                    <td colspan="4"><div id="misc"><i><b>Contact Details</b></i></div></td>
                </tr>
                <tr><td><b>Cell No.</b></td>
                    <td><?php echo $_GET["cell"] ?></td>
                </tr>
                <tr>
                    <td><b>Email Address:</b></td>
                    <td><?php echo $_GET["email"] ?></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><div id="misc" align="center"><i><b>Misc.</b></i></div></td>
                </tr>
                <tr>
                    <td><b>Province:</b> </td>
                    <td>
                        <?php echo $_GET["province"] ?>      
                    </td>
                </tr>
                <tr>
                    <td><b>City:</b></td>
                    <td>
                        <?php echo $_GET["city"] ?>  
                    </td>                    
                </tr>
                <tr><td><b>Gender:</b></td>
                    <td><?php echo $_GET["gender"] ?></td>
                </tr>
                <tr>
                    <td><b>Languages:</b></td>
                    <td><?php $name = $_GET['lang'];
                    foreach ($name as $lang){ 
                        echo $lang." <br>";
                    }?>
                    </td>                    
                </tr>  
                <a href="./Task.html"><input type="button" value="Back" class="backToForm"><a>
            </table>
        </form>
    </div>
    <footer>Designed by: Mursal Furqan</footer>
   </body>
</html>

