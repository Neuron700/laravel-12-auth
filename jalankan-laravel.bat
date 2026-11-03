@echo off
REM Jalankan Laravel 12 dengan PHP 8.3 portable (XAMPP PHP 8.0.30 tidak cukup untuk Laravel 12)
REM Buka browser ke http://127.0.0.1:8000 setelah server berjalan.
cd /d "%~dp0"
"D:\XAMPP\php83\php.exe" artisan serve --host=127.0.0.1 --port=8000
