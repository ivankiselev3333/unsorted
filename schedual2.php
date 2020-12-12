<?php
ini_set('date.timezone', 'Europe/Moscow');
#Советую запускать таймер на рамдиске, так как файл инклюдиться, для этого расписания, его при запушенном таймере можно редактировать и менять, а таймер подхватит. 
$dir='Z:\a.myfolder\a.SYSTEM\system_sounds';
$today=[
  ' 06:00: ',
  ' 06:15: ',
  ' 06:45: ',
  ' 07:00: ',
  ' 07:15: ',
  ' 07:45: ',
  ' 08:04: ',
  ' 08:15: ',
  ' 08:45: ',
  ' 09:00: ',
  ' 09:15: ',
  ' 09:45: ',
  ' 10:00: ',
  ' 10:15: ',
  ' 10:45: ',
  ' 11:00: ',
  ' 11:15: ',
  ' 11:45: ',
  ' 12:00: ',
  ' 12:15: ',
  ' 12:45: ',
  ' 13:00: ',
  ' 13:15: ',
  ' 13:45: ',
  ' 14:00: ',
  ' 14:15: ',
  ' 14:45: ',
  ' 14:00: ',
  ' 14:15: ',
  ' 14:45: ',
  ' 16:00: ',
  ' 16:15: ',
  ' 16:45: ',
  ' 17:00: ',
  ' 17:15: ',
  ' 17:45: ',
  ' 18:03: ',
  ' 18:15: ',
  ' 18:45: ',
  ' 19:00: ',
  ' 19:15: ',
  ' 19:45: ',
  ' 20:00: ',
  ' 20:15: ',
  ' 20:45: ',
  ' 21:00: ',
  ' 21:15: ',
  ' 21:45: ',
  ' 22:00: ',
  ' 22:15: ',
  ' 22:45: ',
  ' 23:00: ',
  ' 23:15: ',
  ' 23:45: ',
  ' 00:00: ',
  ' 00:15: ',
  ' 09:45: ',
  ' 00:00: ',
  ' 01:15: ',
  ' 01:45: ',
  ' 02:00: ',
  ' 02:15: ',
  ' 02:45: ',
  ' 03:00: ',
  ' 03:15: ',
  ' 03:45: ',
  ' 04:00: ',
  ' 04:15: ',
  ' 04:45: ',
  ' 05:00: ',
  ' 05:30: ',
  ' 05:45: ',
 
];
$t=0;$n=0;$b=0;
$h=date("H:", time());
$d=date("H:i", time());
$m=substr($d.':00 ',3,1);

$timersToday=[
  //SLEEP
$t++=>[$n++,'11:12:35 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','text','12:24:35'],

///////////////////////////////////////INTERVAL///////////////////////////////////////////////////
$t++=>[$n++, $d.':30 '.$times = date("d-m-Y A", time()),$dir. $d.':30 '.$times = date("d-m-Y A", time())],  
$t++=>[$n++, $h.$m.'0:50 '.$times = date("d-m-Y A", time()),$dir. '\fine.mp4','sound&text','как дела?'],  

  //SLEEP
  $t++=>[$n++,'06:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','6'     .$today[$b++]],
  $t++=>[$n++,'06:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','6 15'.$today[$b++]],
  $t++=>[$n++,'06:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','6 45'.$today[$b++]],
  //SLEEP
  $t++=>[$n++,'07:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone',  '7'    .$today[$b++]],
  $t++=>[$n++,'07:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','7 15' .$today[$b++]],
  $t++=>[$n++,'07:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','7 45'.$today[$b++]],
  
  $t++=>[$n++,'08:04:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','8 '.$today[$b++]],
  $t++=>[$n++,'08:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','8 15'.$today[$b++]],
  $t++=>[$n++,'08:45:30 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','8 45'.$today[$b++]],
  //EAT
  $t++=>[$n++,'09:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','9'.$today[$b++]],
  $t++=>[$n++,'09:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'.$today[$b++]],
  $t++=>[$n++,'09:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','9 45'.$today[$b++]],

//10
  $t++=>[$n++,'10:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','10'.$today[$b++]],
  $t++=>[$n++,'10:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','10 15'.$today[$b++]],
  $t++=>[$n++,'10:45:00 '.$times = date("d-m-Y A", time()),$dir.'\3.mp4','sound&text','10 45'.$today[$b++]],
//11
  $t++=>[$n++,'11:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','11 '.$today[$b++]],
  $t++=>[$n++,'11:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','11 15'.$today[$b++]],
  $t++=>[$n++,'11:45:00 '.$times = date("d-m-Y A", time()),$dir.'\3.mp4','sound&text','11 45 '.$today[$b++]],
//12
  $t++=>[$n++,'12:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','12 Теперь '.$today[$b++]],   
  $t++=>[$n++,'12:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','12 15 '.$today[$b++]],
  $t++=>[$n++,'12:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','12 45'.$today[$b++]],
  //13
  $t++=>[$n++,'13:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','13 '.$today[$b++]],
  $t++=>[$n++,'13:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','13 15 '.$today[$b++]],
  $t++=>[$n++,'13:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','13 45  '.$today[$b++]],
//14
  $t++=>[$n++,'14:00:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','14 00 '.$today[$b++]],
  $t++=>[$n++,'14:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','14 15'.$today[$b++]],
  $t++=>[$n++,'14:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','14 45'.$today[$b++]],
//15
  $t++=>[$n++,'15:00:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','15 00 '.$today[$b++]],
  $t++=>[$n++,'15:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15 15'.$today[$b++]],
  $t++=>[$n++,'15:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','15 45'.$today[$b++]],
//16
  $t++=>[$n++,'16:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','16:00:00'.$today[$b++]],
  $t++=>[$n++,'16:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','16:15:00 '.$today[$b++]],
  $t++=>[$n++,'16:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3.mp4','sound&text','16:45:00 '.$today[$b++]],
//17
  $t++=>[$n++,'17:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','17:00:00'.$today[$b++]],
  $t++=>[$n++,'17:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','17:15:00 ПЕРЕРЫВ озвучка тестка'.$today[$b++]],
  $t++=>[$n++,'17:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','17:15:00'.$today[$b++]],
//18
  $t++=>[$n++,'18:03:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','18 '.$today[$b++]],
  $t++=>[$n++,'18:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','18 15'.$today[$b++]],
  $t++=>[$n++,'18:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','18 45'.$today[$b++]],
//19
  $t++=>[$n++,'19:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','19'.$today[$b++]],
  $t++=>[$n++,'19:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','19 15'.$today[$b++]],
  $t++=>[$n++,'19:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','19 45'.$today[$b++]],
//20
  $t++=>[$n++,'20:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone', '20'.$today[$b++]],
  $t++=>[$n++,'20:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','20 15'.$today[$b++]],
  $t++=>[$n++,'20:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','20 45'.$today[$b++]],
//21
  $t++=>[$n++,'21:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone',  '21:00:00'.$today[$b++]],
  $t++=>[$n++,'21:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','21:15:00'.$today[$b++]],
  $t++=>[$n++,'21:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','21:45:00'.$today[$b++]],
//22
  $t++=>[$n++,'22:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','22' .$today[$b++]],
  $t++=>[$n++,'22:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','22 15'.$today[$b++]],
  $t++=>[$n++,'22:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','22 45'.$today[$b++]],
//23
  $t++=>[$n++,'23:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','23'.$today[$b++]],
  $t++=>[$n++,'23:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'.$today[$b++]],
  $t++=>[$n++,'23:45:00 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','sound&text',' '.$today[$b++]],





  //SLEEP text  text, timezone, sound&text, music
  $t++=>[$n++,'00:00:53 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','timezone','00 '.$today[$b++]],
  $t++=>[$n++,'00:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'.$today[$b++]],
  $t++=>[$n++,'09:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','text','45'.$today[$b++]],
//SLEEP
  $t++=>[$n++,'00:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','1'.$today[$b++]],
  $t++=>[$n++,'01:15:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','1 15'.$today[$b++]],
  $t++=>[$n++,'01:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','1 45'.$today[$b++]],
//SLEEP
  $t++=>[$n++,'02:00:00 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','timezone','2'.$today[$b++]],
  $t++=>[$n++,'02:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','2 ч 15'.$today[$b++]],
  $t++=>[$n++,'02:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','2 ч 45'.$today[$b++]],
//SLEEP
  $t++=>[$n++,'03:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','3' .$today[$b++]],
  $t++=>[$n++,'03:15:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','3 ч 15'.$today[$b++]],
  $t++=>[$n++,'03:45:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','3 ч 45'.$today[$b++]],
//SLEEP
  $t++=>[$n++,'04:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','4'     .$today[$b++]],
  $t++=>[$n++,'04:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','4 15'.$today[$b++]],
  $t++=>[$n++,'04:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','4 45'.$today[$b++]],
//SLEEP
  $t++=>[$n++,'05:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','5'     .$today[$b++]],
  $t++=>[$n++,'05:30:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','5 30'.$today[$b++]],
  $t++=>[$n++,'05:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','5 45'.$today[$b++]]

/*
.-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.- .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-
/ / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \  / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \eval
`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'    `-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-' `-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'
*/
];
