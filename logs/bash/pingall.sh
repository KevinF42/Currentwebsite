touch outping.txt
NOW=$(date +"%Y-%m-%d-%T");
LOGFILE="PING-$NOW.txt";
/home/kjf/bash/ping.sh >> Logfiles.txt;

