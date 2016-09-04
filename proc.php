

if(!empty($_GET['data'])){
$data = $_POST['data'];
$fname = "database.txt";//generates random name

$file = fopen("upload/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);
}
