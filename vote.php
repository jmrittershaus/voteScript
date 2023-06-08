<?PHP
session_start();
$ground_1 = '0';
$notnone = 'OPEN';
$ground_2 = session_name();
session_name("voteWiSpt"); 
$ground_3 = session_name();
$ground_4 = '0';
$ground_5 = '0';
$ground_6 = '0';

echo session_id();
echo "<br>";
echo session_name();
echo '<br>';
echo $PHPSESSID;

$vari = 'Mein Inhalt';

if(session_register('notnone'))
  echo 'notnone Variable registriert!';

if(session_register('vari'))
  echo 'vari Variable registriert!';

echo session_save_path();

session_set_cookie_params(7200, '/tmp', 'rittershaus13.bplaced.net');
$cookie = session_get_cookie_params();
while(list($key, $val) = each($cookie)){
  echo $key . ': ' . $val;
  echo '<br>';
}

if(session_start())echo "Session wurde erstellt!"; 

echo file_exists("datas/data.db");

if (file_exists(datas/data.db))
echo 'The File exists!';

?>