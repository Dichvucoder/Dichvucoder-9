print_r("INSTALL TUR-REPO ...\n");
shell_exec("pkg i tur-repo -y >install.log");
print_r("INSTALL DICHVUCODER-REPO ...\n");
shell_exec("pkg i dichvucoder-repo -y >install.log");
print_r("INSTALL PHP ...\n");
shell_exec("pkg i php -y >install.log");
print_r("INSTALL DICHVUCODER EXTENSION ...\n");
shell_exec("pkg i php-dichvucoder -y >install.log");
print_r("AUTO INSTALL DONE\n");
