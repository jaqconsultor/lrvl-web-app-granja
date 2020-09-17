rem    Echo %Date:~0,2% nos devolverá el día, ‘23‘,
rem     Echo %Date:~3,2% nos devolverá el mes, ‘10‘, y
rem     Echo %Date:~6,4% nos devolverá el año, ‘2008‘.
rem    Echo %Time:~0,2% nos devolverá la hora, ‘14‘,
rem Echo %Time:~3,2% nos devolverá los minutos, ‘08‘, y
rem Echo %Time:~6,5% nos devolverá los segundos, ‘09,52‘.

Set ff=%date%
echo %ff%

Set Fecha=%Date:~6,4%_%Date:~3,2%_%Date:~0,2%
Set Fecha=%Date:~10,4%_%Date:~7,2%_%Date:~4,2%
Set Hora=%Time:~0,2%_%Time:~3,2%_%Time:~6,2%
Set archivo="lrvl_web_app_%Fecha%.%Hora%.zip"

echo %Fecha%
echo %Hora%
echo %archivo%

del "lrvl_web_app_*.zip"

@echo off
d:
cd "D:\MD\xampp7\htdocs\lrvl-web_app"
set "CURRENT_DIR=%cd%"

set "valor=WinRAR a %archivo% %CURRENT_DIR%\*.*"

echo %valor%

WinRAR a %archivo% "%CURRENT_DIR%"


del "D:\NUBE\Dropbox\lrvl_web_app_*.zip"
copy %archivo% "D:\NUBE\Dropbox\"

echo %archivo%
pause
