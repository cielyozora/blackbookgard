#!/data/data/com.termux/files/usr/bin/bash
# FB ProfileGuard
# by Dewie Terrazola
# fb.me/dewieph
# fb.me/theblackbookph

black='\033[1;30m'
red='\033[1;31m'
green='\033[1;32m'
yellow='\033[1;33m'
blue='\033[1;34m'
purple='\033[1;35m'
cyan='\033[1;36m'
white='\033[1;37m'


figlet TBB ProfileGuard
echo -e $red"              Brought to you by: Dewie Terrazola ";
echo -e $green" Thanks to: ";
echo -e $green" https://github.com/dfmcvn/getFBtoken ";
echo -e $green" Support us!";
echo -e $green" Visit: fb.me/theblackbookph ";
echo -e $white"\n";
sleep 1
echo "1 ) Input number 1 to install php";
echo "2 ) Input number 2 if you already have php";
echo "69) Input this number "69" to send nudes!";
read -p "[Dewie loves you!] >"  act;

if [ $act = 1 ] || [ $act = 1 ]
then
apt update -y && apt upgrade -y
pkg install -y php
pkg install -y figlet
clear
sleep 1
php 1.php
clear
php 2.php
sleep 2
clear
php g.php
fi

if [ $act = 2 ] || [ $act = 2 ]
then
apt update -y && apt upgrade -y
clear
php 1.php
clear
php 2.php
sleep 2
clear
php g.php
fi

if [ $act = 69 ] || [ $act = 69 ]
then
echo -e $red'Like Our Page: @theblackbookph'
sleep 2
echo -e $red'Send nudes! My Dear!'
sleep 2
echo -e $red'Like! Share Comment! Kung wala kang nudes na i-sisend! Haha'
sleep 1
echo -e $red'Shout Out sa Crush ko sa TBB'
sleep 1
echo -e $red'Kung hindi ukol, Hindi bubukol'
echo -e $cyan'Follow me @dewieph at ikaw ay magkakaroon ng buhay na walang hanggan'
echo -e $cyan'www.facebook.com/dewieph'
figlet Dewie Terrazola
sleep 2
exit
fi