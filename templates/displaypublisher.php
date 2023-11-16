<?php
$server = "localhost";
$username = "root";
$password = "Wrongway@123";
$c = new mysqli($server, $username, $password, "venky");
$r = "SELECT * FROM PUBLISHER";
$t = $c->query($r);
?>
<html>
    <head>
        <title>PUBLISHER DISPLAY</title>
        <style>
            body{
                width: 100%;
                min-height: 100vh;
                background: #34495e;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            table{
                border-collapse: collapse;
                width: 75%;

            }
            table th{
                color: #fff;
                padding: 10px;
            }
            table td{
                color: #fff;
                font-size: 1.2em;
                padding: 10px;
                text-align: center;
            }
            .btn{
                background: #fff;
                color: darkred;
                font-size: 1.2em;
                padding: 5px 30px;
                text-decoration: none;
            }
            .btn:hover{
                background: darkred;
                color: #fff;
            }
            </style>
</head>
    <body>
    
        <table border="1" cellpadding="0">
          <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>      
          </tr>
          <?php
          if($t->num_rows>0)
          {
              while( $u = $t->fetch_assoc())
              {
                  echo "
                  <tr>
                  <td>" . $u['Name'] . "</td>
                  <td>" . $u['Address'] . "</td>
                  <td>" . $u['phone'] . "</td>
                  </tr>";
              }
          }
          else{
              echo "no record found";
          }
          ?>
        </table>
        </body>
</html>