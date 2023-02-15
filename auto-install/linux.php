print_r("INSTALL TUR-REPO ...\n");
system("pkg i tur-repo -y");
print_r("INSTALL DICHVUCODER-REPO ...\n");
system("pkg i dichvucoder-repo -y");
print_r("INSTALL PHP 7 ...\n");
system("pkg i php7 -y");
print_r("INSTALL DICHVUCODER EXTENSION");
system("pkg i php7-dichvucoder -y");
print_r("AUTO INSTALL DONE\n");
