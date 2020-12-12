#NoEnv
#Persistent
#SingleInstance Force

OnClipboardChange: 
    
    FileAppend, %Clipboard%, A:\apps\a\clipboard\clip
    FileAppend, %Clipboard%, A:\apps\a\clipboard\clip_
    run, C:\Windows\System32\cmd.exe /k A: cd A:\apps\a\win & start listener.lnk & exit
return 