# botman-twilio-web-example
This is a simple repo showing a working version of twilio and web drivers for botman

## Steps to run
1) Clone the Repo ```git clone https://github.com/mazeeblanke/botman-twilio-web-example.git```

2) ```cd botman-twilio-we-example```
3) Run with php server ```php -S 127.0.0.1:2000 -t public index.php```
4) Download ngrok https://ngrok.com/download
5) Run Ngrok and point it to port 2000
6) login to https://www.twilio.com and set the incoming message webhook to the generated ngrok url