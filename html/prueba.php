<!DOCTYPE html>
<html>
<body>

<form action="../.php/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  <?php
    if (isset($_GET['mensaje'])){
        echo "<div id='preview'><label style='color:black;'>".$_GET['mensaje']."</label></div>";         
    }

    ?>
  
</form>

</body>
</html>