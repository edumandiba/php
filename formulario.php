<!DOCTYPE html>
<html>
<body>

<form action="/action_page.php">
  <select name="cars">
      
   <?php   
      $nomes = array("marca1" => "volvo","marca2" => "Saab","marca3" => "fiat","marca4" => "Audi", "marca5" =>"ford","marca6" => "chevrolet");
      foreach ($nomes as $value =>$marca)
      {
    echo "<option value=" . $value . ">" . $marca ."</option> br" ;}
      
    
    ?>
  </select>
  <br><br>
  <input type="submit">
</form>

</body>
</html>
