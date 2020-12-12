TIMER with voice. Description.


Basic illustration of concept, little digital ticking clock in cmd.exe or bash, launches music on time, or voices out text, remind on specific date and time, and 
randomly reads aloud from list, on different time interval in the day. Use ramdisk since schedual, is reincluded, so if you add or change something in it, timer will update automatically. 

Таймер который озвучивает текст в расписание, включает музыку, запускает скрипт, все по времени. Часы тикают в консоли, расписание можно изменять без перезапуска таймера (include). 
единственное лучше запускать подобное на рамдиске (виртуальный жесткий диск в оперативной памяти в 10 раз быстрей ssd ).


добавить в системные переменные путь до голосового движка 
timer needs ink. with parrams C:\Windows\System32\cmd.exe /k D: & php Z:\scripts\timer.php 
над добавить ярлык консольки ее предварительно ее кастомизирова закрепив на экране

for it to work

setup ramdisk put files there. 
start cmd.exe 
download govorilka(voice engine) & vlc or whatelse 
to system variables PATH add your voice engine so it would work in cmd, 
change sayRu(function in timer, change dirs, 
add folder for music add music, change in schedual.
php timer.php 
+ add shortcut for launching timer in cmd with dimensions set. //ink. C:\Windows\System32\cmd.exe /k D: & php Z:\scripts\timer.php 


Otherfiles please ignore 

Пару ахк 
autokeys надо установить и скомпилировать ахк 
получение буфера обмена с переносом в массив пхп clip
получение нажатых клавишь, и отправка в пхп если два раза алт алт нажать. showkeys regkeys  смотрите на stackoverflow 

Раскалдка клавишь использует кастомную раскалдку, и с нее генеририруется файл iflayout генериатором, в iflayout ctrl+f a = привязка клавишы после alt alt и подачка в буфер, или к примеру 
запуск программы от кнопки. Делаю код базу, с голосовым индексом, распознанием речи, управлением буфером, с джойстиком, и кодогенериторами, iflayout ручками не писал.
+ еще автоматизация. Здесь пару файликов для показа друзьям.
А для ахк, надо добавить реестр виндоуса значение. ivankiselev3333@yandex.ru



