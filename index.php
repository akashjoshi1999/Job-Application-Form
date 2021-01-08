<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>JobApplication</title>
  </head>
  <body>
  <form action="form_valid.php" method="POST" enctype="media/">
  <div class="mb-6">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-6">
    <label for="exampleInputMobile" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" name="number">
  </div>
  <div class="mb-6">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-6">
    <label for="exampleInputAge" class="form-label">Age</label>
    <input type="text" class="form-control" name="age">
  </div>
  <div class="mb-6">
    <label for="exampleInputExp" class="form-label">Experience in year</label>
    <input type="text" class="form-control" name="exe">
  </div>
  <div class="mb-6">
      <label for="exampleInputPassword1" class="form-label">Skills</label><br>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">C</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">C++</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
      <label class="form-check-label" for="inlineCheckbox3">JAVA</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
      <label class="form-check-label" for="inlineCheckbox3">PHP</label>
    </div>
  </div>
  
  <div class="mb-6">
  <label for="formFile" class="form-label">Upload your resume</label>
  <input class="form-control" type="file" id="formFile" name="file">

  </div>
  <div class="mb-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

  <span>
    <?php if(isset($_GET['x']))
      echo $_GET['x'];
    ?>
  </span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
  </body>
</html>