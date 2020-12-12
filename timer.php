<?php
ini_set('date.timezone', 'Europe/Moscow');

// Можно подключить говорилку или другой голосовой движок, затем прописать его в системных переменных. чтобы расписанье говарило 

$reminders=include_once('reminders.php');
function reminders($time,$reminders){
if(isset($reminders[$time][0])){
	if($time===$reminders[$time][0]){
			sayRu($reminders[$time][1]);			
			print_r($reminders[$time][1]);			 
			sleep(17);
			if($reminders[$time][1]==='END');{
				unset($reminders);
				return $reminders=include_once('reminders.php');
			}
			exec('clear'); echo ' НАПОМИНАНИЕ '. $time . '';		print_r($reminders[$time][1]);		sleep(5);	}
	}
}
		function timezone($TimeZone){
sleep(10);

			include('tzone.php');
			if($timezones[$TimeZone][0]===1){sayRu($timezones[$TimeZone][1]);sleep(10);		return $timezones[$timezones][1];	}  }
			
A:
include_once('schedual.php');

function sayRu($text){       sleep(1);   pclose(popen('start  /b cmd.exe /c "voice "'.$text.';" ', 'r'));	  } 
$times = date("H:i:s d-m-Y", time());
while (1) {	$x=monitor();	if($x===2){		include('schedual.php');	}
	$times = date("H:i:s d-m-Y ", time());	$c = count($timersToday);
	$parts=str_split("  | _ |_| _||_ | |    . 152600134133620143142100122123677666",3);
	echo "\r";echo PHP_EOL;
		echo str_repeat(PHP_EOL,100);
		$time=date('H:i:s')." ".sprintf("%3d",round((microtime(true)-time())*1000));//$s="12:34567 89990";
		$s=$time;
		$l=array();
		foreach (str_split($s) as $c) {
			if($c==":") $c=10;
			if($c==" ") $c=11;
			for($i=0;$i<3;$i++){
				@$l[$i].=$parts[ $parts[$c+8][$i] ];
			}
		}
  echo implode(PHP_EOL,$l);
  echo PHP_EOL;
  sleep(0.30);  //here edit usleep 0 500
  exec('cls');//exec('clear'); win unix
	 reminders(substr($time, 0, 5).' '.date("d-m-Y A", time()),$reminders);

 
	for ($i = 0; $i < count($timersToday); $i++) {
		if (substr($times, 0, 8) === substr($timersToday[$i][1], 0, 8)) {
			sleep(1);
			if($timersToday[$i][3]==='sound&text'){		
			
				sayRu($timersToday[$i][4]);			
				pclose(popen('start vlc.exe --play-and-exit "' . $timersToday[$i][2] . '"', "r"));		
				sleep(5);	
			}
			if($timersToday[$i][3]==='text'){
				
				reminders($timersToday[$i][1],$reminders);
				sayRu($timersToday[$i][4]);
			}			
			if($timersToday[$i][3]==='timezone'){		
				timezone($timersToday[$i][4]);
			}
			if($timersToday[$i][3]==='music'){		
				pclose(popen('start vlc.exe --play-and-exit "' . $timersToday[$i][2] . '"', "r"));		
			}
			if($timersToday[$i][3]==='sound'){
			pclose(popen('start vlc.exe --play-and-exit "' . $timersToday[$i][2] . '"', "r"));
			echo $timersToday[$i][0] . ' ';   				
			}
			if($timersToday[$i][3]==='script'){
			    pclose(popen('php script.php askme', "r"));
					
			}

        


			goto A;
		}
	}
	echo "\r";
}
exit();
function monitor(){
		$file='scripts\schedual.php';
        $fileUpdateTime = date("H:i:s d-m-Y", filemtime($file));
        $CurrentTime = date("H:i:s d-m-Y");
        $fileUpdateTime = strtotime($fileUpdateTime);
        $CurrentTime = strtotime($CurrentTime);
		if (($fileUpdateTime - $CurrentTime) < 0) {    }
        if (($fileUpdateTime - $CurrentTime) === 0) {  return 2; }
        if (($fileUpdateTime - $CurrentTime) <= 100) { return 2; }// include('schedual.php');
        else{        	return 1;        }
}

