#!/bin/bash
#-----------------------------------------------------------------------------
# INIT : create a placecounter for every incoming connection (new/established)
#-----------------------------------------------------------------------------
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
	"ctr")
		get_ctr=$((++get_ctr))
		echo "$get_ctr" > counter
		;;

esac