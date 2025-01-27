<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/announce.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
    <?php include('llinks.php')?>
      <div class="announce_page">
     
      <h1>Add Announcement</h1>
      <div>
        <label for="Subject ">Subject :</label>
        <input type="text" name="Subject" class="subject"  required>
      </div>
      <div>
       <label for="Body">Body :</label>
        <input type="text" name="Body" class="body" required>
      </div>
        <input type="submit" name="Add" value="ADD">
    </form>
   </div>
    <?php include('footer.php') ?>
</body>
</html>
