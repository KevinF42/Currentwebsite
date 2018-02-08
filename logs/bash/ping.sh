for ip in $(seq 1 20);
do
	ping 10.183.1.$ip -c3;
done
