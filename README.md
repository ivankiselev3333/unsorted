TIMER with voice. Description.
.....................................
Basic illustration of concept, little digital ticking clock in cmd.exe or bash, launches music on time, or voices out text, plus has reminders to remind on specific date, and 
randomly reads aloud from array on different time interval. In future, will completly rewrite this in a proper way, had little time. Use ramdisk since schedual, is reincluded, 
so if you add or change something in it, timer will update automatically. 

Таймер который озвучивает текст в расписание, включает музыку по времени, запускает скрипт, часы тикают, можно дописывать в расписание или менять его на ходу, таймер подхватит, 
единственное лучше запускать подобное на рамдиске (виртуальный жесткий диск в оперативной памяти в 10 раз быстрей ssd ) , чтобы обращений к жесткому диску небыло. 


system variables add voice engine, change sayRu(function in timer, add music folder, change dirs, 
добавить в системные переменные путь до голосового движка 
timer needs ink. with parrams C:\Windows\System32\cmd.exe /k D: & php Z:\scripts\timer.php 
над добавить ярлык консольки ее предварительно подогнав, и закрепив на экране
А для ахк, надо добавить реестр виндоуса значение. ivankiselev3333@yandex.ru

for it to work
.....................................
setup ramdisk put files there. 
start cmd.exe 
download govorilka & vlc or whatelse 
add folder for music change dirs
php timer.php 

Otherfiles
---------------------------------------
Пару ахк 
autokeys надо установить и скомпилировать ахк 
получение буфера обмена с переносом в массив пхп clip
получение нажатых клавишь, и отправка в пхп если два раза алт алт нажать. showkeys regkeys  смотрите на stackoverflow 

Раскалдка клавишь использует кастомную раскалдку, и с нее генеририруется файл iflayout генериатором, в iflayout ctrl+f a = привязка клавишы после alt alt и подачка в буфер, или к примеру 
запуск программы от кнопки. Делаю код базу, с голосовым индексом, распознанием речи, управлением буфером, с джойстиком, и кодогенериторами, iflayout ручками не писал.
+ еще автоматизация. Здесь пару файликов для показа друзьям.



