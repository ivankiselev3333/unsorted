<?php 
class kill{
   public $checkup;
public function checkapp($process){$task_list=array(); exec("wmic process get processid,commandline", $task_list); //print_R($task_list);
    $this->task_list=$task_list;
    $j = 0;for ($i = 0; $i < count($task_list); $i++) {if (strpos($task_list[$i], $process)) {
        /*echo $task_list[$i];*/    $str = str_replace(' ', '', $task_list[$i]);$m = preg_match_all('!\d+!', $str, $matches);$j++;if (count($matches[0]) === 3) {//exec("taskkill /PID ".$matches[0][3]." /F");
        $this->checkup[0] = 1; $this->checkup['checkup'][$j][$process]['kill'] = 'taskkill /PID ' . $matches[0][2] . ' /F';    $this->checkup['checkup'][$j][$process]['matches'] = $matches; }if (count($matches[0]) === 2) {// exec("taskkill /PID " . $matches[0][1] . " /F");
        $this->checkup[0] = 1; $this->checkup['checkup'][$j][$process]['kill'] = 'taskkill /PID ' . $matches[0][1] . ' /F';    $this->checkup['checkup'][$j][$process]['matches'] = $matches;}if (count($matches[0]) === 1) { //exec("taskkill /PID " . $matches[0][0] . " /F");
        $this->checkup[0] = 1; $this->checkup['checkup'][$j][$process]['kill'] = 'taskkill /PID ' . $matches[0][0] . ' /F';    $this->checkup['checkup'][$j][$process]['matches'] = $matches;}
    }}
    $this->matches=$matches;
}
public function killKey($key_kill){
    foreach ($this->checkup['checkup'] as $key) {  
        foreach ($key as $key2 => $value) {    
                if ($key2 === $key_kill) {  
   pclose(popen("start cmd.exe /c " . $value['kill'] . '', "r"));
   }          
  
 }      
 
 }  
}

}


$kill=new kill();

if($argv[1]==='check'){

    $kill->checkapp($argv[2]);
   // print_r($kill->task_list);
    print_r($kill->matches);
    print_r($kill->checkup);
}

if($argv[1]==='kill'){
    $kill->checkapp($argv[2]);
    $kill->killKey($argv[2]);

    shell_exec('exit');return exit();
}
else{
echo 'done';shell_exec('exit');return exit();
}


