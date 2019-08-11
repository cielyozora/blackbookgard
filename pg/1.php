<?php
// Edit with credits Brader//
$d01 = "\e[34m";
$d02 = "\e[33m";
$d03 = "\e[96m";
$d04 = "\e[35m";
$d05 = "\e[92m";
$d06 = "\e[91m";
echo "$d05  ×============================================×\n";
echo "$d05  [  Page :____The BlackBook			]\n";
echo "$d05  [  By :_______Dewie Terrazola			]\n";
echo "$d05  [  function  :_Activate Profile Guard		]\n";
echo "$d05  ×============================================ï¿½\n\n";


function code($user1, $pass1){
$dewie = '<?php
$user = "'.$user1.'";
$pass = "'.$pass1.'";
?>';
$file = fopen('lib/config.php','w');
fputs($file,$dewie);
fclose($file);
echo "Successful Setting";
}
echo "username:";
$user1 = trim(fgets(STDIN));
echo "Password:";
$pass1 = trim(fgets(STDIN));
$execute = code($user1, $pass1);
print $execute;
?>