 <?php
for ($i=0;$i<9;$i++){
$result[]=exec('ping -c 1 10.216.0.9'.$i);
}
for($e=0;$e<9;$e++){
if ($result[$e]!=NULL){
echo "l'adresse 10.216.0.9".$e." existe\n";
}}

 
