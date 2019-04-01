$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'dbasae');
<?php
$q ="select * from questions" ;
$query = mysqli_query($con, $q);
while($rows=mysqli_fetch_array($query)){

    
}

?>