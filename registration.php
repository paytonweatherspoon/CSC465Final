<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    ?>

    <form action = "registration.php" method="get">

      <legend>New User Registration:</legend>
      <fieldset>
      <legend>Basic Information</legend>
      <label>First Name: <input type="text" name="firstName" maxlength="40"></label><br>
      <label>Last Name: <input type="text" name="lastName" maxlength="40"></label><br>
      <label>Email: <input type="email" name = "userEmail"></label><br>
      <label>Birthday: <input type="date" name="userDOB"></label><br>
      </fieldset>

      <fieldset>
      <legend>Gaming Information</legend>
      <p>Select Games you play and number of years:
      <?php
        $games = array("r6" =>  "Rainbow Six Siege","LOL" => "League of Legends","CSGO" => "Counter Strike: Global Offensive",
        "FRT" => "Fortnite");
        foreach ($games as $key => $value) {
          echo "<p><label><input type = \"checkbox\" name = \"$key\">$value</label><input type=\"number\" name=\"year$key\" min = \"1\" max = \"10\" maxlength=\"2\"></p>";
        }
       ?>
      </p>
      </fieldset>

    </form>


  </body>
</html>
