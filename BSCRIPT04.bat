@echo off
setlocal enabledelayedexpansion

:sort_by_date
forfiles /P C:\ /M *.txt /C "cmd /c echo @fdate @path" > C:\sorted_by_date.txt

:archive_old_files
set folder=Z:\archive
if not exist %folder% mkdir %folder%
forfiles /P C:\ /M *.txt /D -30 /C "cmd /c move @path %folder%"

:sort_archived_by_size
dir %folder% /O-S /B > %folder%\sorted_by_size.txt

:delete_confirmation
set /p delete=Do you want to delete the old, large files in %folder%? (y/n): 
if /i "%delete%"=="y" (
    del %folder%\*.txt
    echo Files deleted.
) else (
    echo Files not deleted.
)
goto end

:end
pause
