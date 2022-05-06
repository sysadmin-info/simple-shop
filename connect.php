$conn=mysqli_connect('localhost', 'root', '', 'database');
$lg=@$_POST['login'];
$ps=@$_POST['pass'];
$row='';
