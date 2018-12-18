<html>
<link rel="stylesheet" href="css/infoscan.css" media="all" rel="stylesheet" type="text/css">
<body>
<div class="table">
  <th><h2>Enter Domain Name</h2></th>
    <tr><em>Example: google.com</em></tr>
    <tr><form method="POST" action="">
    <input type="text" name="url">
    <input type="submit" value="Submit">
   </form>
  </tr>
 </div>
<?php
if (isset($_POST['url'])) {
    $cmd = $_POST['url'];
    echo "<pre>".shell_exec('ping -c 4 ' . escapeshellarg($cmd))."</pre>";
    echo "<pre>".shell_exec('traceroute ' . escapeshellarg($cmd))."</pre>";
    echo "<pre>".shell_exec('whois ' . escapeshellarg($cmd))."</pre>";
}
?>
</body>
</html>
