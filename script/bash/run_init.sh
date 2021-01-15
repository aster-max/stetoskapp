#!/bin/bash
touch counter
path_db="../../database/"
get_ctr=$(cat counter)
if [[ ! $get_ctr ]]
then
	echo "0" > counter
	get_ctr=$(cat counter)
fi
##
case $1 in
	"ip")
		echo -n "$ip"
		;;
	"sm")
		echo -n "$sm"
		;;
	"ctr")
		get_ctr=$((++get_ctr))
		echo "$get_ctr"
		echo "$get_ctr" > counter
		;;

esac