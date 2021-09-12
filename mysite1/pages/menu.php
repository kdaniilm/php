<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MY SITE</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php?page=1">Home</a>
        <a class="nav-link" href="index.php?page=2">Upload</a>
        <a class="nav-link" href="index.php?page=3">Gallery</a>
        <a class="nav-link" href="index.php?page=4">Registration</a>
        <?php include_once("pages/login.php"); ?>
      </div>
    </div>
  </div>
</nav>