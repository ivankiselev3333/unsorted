<?php 
ini_set('date.timezone', 'Europe/Moscow');

repeat:
$reminders=[
    '07:36 11-12-2020 AM'=>['07:36 11-12-2020 AM','День рождение  через 3 дня'],

];



// use the multicursor luke! ' ', 
$optional_repeat=[

'accidial  v.  dial someone s number on phone accidentally',
'agender  n.   people do not identify as male or female',
'airball  n.  completely miss the basket, rim, and backboard with a shot',
'automagically  ad.  
in a way that seems magical, especially by computer',
'awesomesauce  a.  extremely good; excellent',


];


//озвучивание с задержкой 
function repeattoday($delay,$optional_repeat,$reminders,$count,$f){
$max=$count;
 $reminders[date("H:i d-m-Y A", time() + $delay)]=
[
    date("H:i d-m-Y A", time() + ($delay*$count)),
    $optional_repeat[rand(0,count($optional_repeat)-1)]
];
if($f===1){
   return [ date("H:i d-m-Y A", time() + ($delay*$count)),
    $optional_repeat[rand(0,count($optional_repeat)-1)]];
}

while($count!==0 || $count>=1)  
{    
    $count=$count-1;
    $item[0]=repeattoday($delay,$optional_repeat,$reminders,$count,$f=1);    
    $reminders[date("H:i d-m-Y A", time() + ($delay*$count))]=$item[0];
}

if($count===0) {
    $reminders[ date("H:i d-m-Y A", time() + ($delay*$max))]=
    [date("H:i d-m-Y A", time() + ($delay*$max)),  'END'    ];   

    return $reminders;
  }

}

$delay=rand(150,300).'';
echo $delay;
$reminders2=repeattoday($delay,$optional_repeat,$reminders,count($optional_repeat),$f=0);
$reminders=array_merge($reminders,$reminders2);








/* 

Это для записии данных в файле, в основном для дебага. 

require_once('ob_filewriter.php');
$obfw = new OB_FileWriter('A:\apps\a\git\outremind1.php');
$obfw->start();
echo "
<?php 

";
print_R($reminders);

$obfw->end();
file_put_contents( 'A:\apps\a\scripts\outremind.php' ,'<?php return $reminders='.var_export( $reminders, true ).";\n" );
include('outremind.php');
return $reminders;
*/