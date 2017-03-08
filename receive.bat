@echo off
netsh wlan set hostednetwork mode=allow ssid=KilobyteFT key=12345678
netsh wlan start hostednetwork
echo Please Connect to KilobyteFT Hotspot on the Sender PC

pause
cd C:\Kilobyte

start server.bat

echo Press any key to close After the Transfer is completed.

pause

netsh wlan stop hostednetwork

explorer C:\Kilobyte\Received

taskkill /F /FI /IM cmd.exe