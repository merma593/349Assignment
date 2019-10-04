<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN"><!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contact Database</title>
    <meta charset=utf-8>
  </head>
  <body>
    <header>
      <h1>Contact Database</h1>
      <nav>
        <div id ="menu"><a href="http://52.187.208.81"><h2>Enter Details</h2></a></div>
        <div id ="menu"><h2>Contacts</h2></div>
      </nav>
    </header>

    <div id="main">
      <table id="contacts">
        <tr><th>First Name</th><th>Last Name</th><th>Phone number</th><th>Email</th></tr>

        <?php

          $options = array(PDO::MYSQL_ATTR_SSL_CA => '/var/www/bin/BaltimoreCyberTrustRoot.crt.pem');
          $db = new PDO('mysql:host=assign2contactlistdb.mysql.database.azure.com;port=3306;dbname=contactdb', 'merma593@assign2co$
          $q = $db->query("SELECT * FROM contactInfo");
        while($row = $q->fetch()){
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row[phonenum]."</td><td>".$row[email]."</td></$
        }
        ?>
      </table>
    </div>



  </body>
