<?php include_once("services/loginService.php");?>
<form class="row" action="index.php" method="post" style="margin-left: 2%;">
    <input style="width: 100px; height: 30px;" placeholder="Login" type="text" name="logName"/>
    <input style="width: 100px; height: 30px; margin-left: 2%;" placeholder="Password" type="text" name="pass"/>
    <input style="width: 208px; height: 30px; margin-top: 2%;" class="btn-primary" type="submit" value="Login"/>
</form>