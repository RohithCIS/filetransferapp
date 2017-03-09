@echo off
netsh wlan set hostednetwork mode=allow ssid=KilobyteFT key=12345678
netsh wlan start hostednetwork

cd C:\Kilobyte

start server.exe

start receive.html

echo DO NOT Close This Window Until Transfer Completes

pause

echo DO NOT Press any key again until transfer Completes

pause

netsh wlan stop hostednetwork

taskkill /F /IM server.exe

explorer C:\Kilobyte\Received