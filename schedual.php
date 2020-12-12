<?php
ini_set('date.timezone', 'Europe/Moscow');

$t=0;$n=0;

$h=date("H:", time());
$d=date("H:i", time());
$m=substr($d.':00 ',3,1);

#Советую запускать таймер на рамдиске, так как файл инклюдиться, для этого расписания, его при запушенном таймере можно редактировать и менять, а таймер подхватит. 
$dir='sounds\\';
$timersToday=[
//SLEEP


$t++=>[$n++,'11:12:35 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','text','12:24:35'],

///////////////////////////////////////INTERVAL///////////////////////////////////////////////////
//$t++=>[$n++, $d.':30 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','text','что ты делаешь?'],  
//$t++=>[$n++, $h.$m.'0:30 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','text','что ты делаешь?'],  

//SLEEP text  text, timezone, sound&text, music
  $t++=>[$n++,'00:00:53 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','timezone','00 '],
  $t++=>[$n++,'00:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'],
  $t++=>[$n++,'09:03:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','text','45'],
//SLEEP
  $t++=>[$n++,'00:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','1'],
  $t++=>[$n++,'01:15:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','1 15'],
  $t++=>[$n++,'01:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','1 45'],
//SLEEP
  $t++=>[$n++,'02:00:00 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','timezone','2'],
  $t++=>[$n++,'02:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','2 ч 15'],
  $t++=>[$n++,'02:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','2 ч 45'],
//SLEEP
  $t++=>[$n++,'03:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','3' ],
  $t++=>[$n++,'03:15:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','3 ч 15'],
  $t++=>[$n++,'03:45:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','3 ч 45'],
//SLEEP
  $t++=>[$n++,'04:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','4'     ],
  $t++=>[$n++,'04:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','4 15'],
  $t++=>[$n++,'04:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','4 45'],
//SLEEP
  $t++=>[$n++,'05:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','5'     ],
  $t++=>[$n++,'05:30:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','5 30'],
  $t++=>[$n++,'05:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','5 45'],
//SLEEP
  $t++=>[$n++,'06:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','6'     ],
  $t++=>[$n++,'06:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','6 15'],
  $t++=>[$n++,'06:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','6 45'],
//SLEEP
  $t++=>[$n++,'07:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone',  '7'    ],
  $t++=>[$n++,'07:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','7 15' ],
  $t++=>[$n++,'07:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','7 45',],

  $t++=>[$n++,'08:04:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','8 '],
  $t++=>[$n++,'08:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','8 15'],
  $t++=>[$n++,'08:45:30 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','8 45'],
//EAT
  $t++=>[$n++,'09:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','9'],
  $t++=>[$n++,'09:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'],
  $t++=>[$n++,'09:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','9 45',],
//10
/*
.-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.- .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-.   .-.-
/ / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \  / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \ \ / / \eval
`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'    `-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-' `-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'   `-`-'
*/
  $t++=>[$n++,'10:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','10'],
  $t++=>[$n++,'10:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','10 15'],
  $t++=>[$n++,'10:45:00 '.$times = date("d-m-Y A", time()),$dir.'\3.mp4','sound&text','10 45',],
//11
  $t++=>[$n++,'11:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','11 '],
  $t++=>[$n++,'11:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','11 15'],
  $t++=>[$n++,'11:45:00 '.$times = date("d-m-Y A", time()),$dir.'\3.mp4','sound&text','11 45 ',],
//12
  $t++=>[$n++,'12:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','12 Теперь '],   
  $t++=>[$n++,'12:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','12 15 '],
  $t++=>[$n++,'12:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','12 45'],
  //13
  $t++=>[$n++,'13:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','13 '],
  $t++=>[$n++,'13:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','13 15 '],
  $t++=>[$n++,'13:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','13 45  ',],
//14
  $t++=>[$n++,'14:00:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','14 00 '],
  $t++=>[$n++,'14:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','14 15'],
  $t++=>[$n++,'14:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','14 45',],
//15
  $t++=>[$n++,'14:00:40 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','15 00 '],
  $t++=>[$n++,'14:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15 15'],
  $t++=>[$n++,'14:45:00 '.$times = date("d-m-Y A", time()),$dir.'\underworldblue.mp4','sound&text','15 45',],
//16
  $t++=>[$n++,'16:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','16:00:00'],
  $t++=>[$n++,'16:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','16:15:00 '],
  $t++=>[$n++,'16:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3.mp4','sound&text','16:45:00 ',],
//17
  $t++=>[$n++,'17:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','17:00:00'],
  $t++=>[$n++,'17:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','17:15:00 '],
  $t++=>[$n++,'17:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','17:15:00',],
//18
  $t++=>[$n++,'18:03:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','18 '],
  $t++=>[$n++,'18:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','18 15'],
  $t++=>[$n++,'18:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','18 45',],
//19
  $t++=>[$n++,'19:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','19'],
  $t++=>[$n++,'19:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','19 15'],
  $t++=>[$n++,'19:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','19 45',],
//20
  $t++=>[$n++,'20:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone', '20'],
  $t++=>[$n++,'20:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','20 15'],
  $t++=>[$n++,'20:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','20 45',],
//21
  $t++=>[$n++,'21:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone',  '21:00:00'],
  $t++=>[$n++,'21:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','21:15:00'],
  $t++=>[$n++,'21:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','21:45:00',],
//22
  $t++=>[$n++,'22:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','22' ],
  $t++=>[$n++,'22:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','22 15'],
  $t++=>[$n++,'22:45:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','22 45',],
//23
  $t++=>[$n++,'23:00:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','timezone','23'],
  $t++=>[$n++,'23:15:00 '.$times = date("d-m-Y A", time()),$dir.'\1.mp3','sound&text','15'],
  $t++=>[$n++,'23:45:00 '.$times = date("d-m-Y A", time()),$dir. '\1.mp3','sound&text',' '],
];
