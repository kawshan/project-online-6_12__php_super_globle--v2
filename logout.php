<?php
?>
<html>
<head></head>
<body>
<h4>successfully logout</h4>
<h1>come again</h1>
<hr>
<?php
session_start();
session_destroy();
include ('login.html');
?>
</body>
</html>
