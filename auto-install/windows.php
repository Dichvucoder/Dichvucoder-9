$ver = substr(trim($version), 0, 3);
if (!in_array($ver, ["7.4","8.2","8.1"])) {die("Only supports auto-installation for PHP 7.4,8.1 or 8.2\n");}
file_put_contents(ini_get("extension_dir") . "/php_dichvucoder.dll", (stripos($machine, "x64") !== false) ? file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x64/php-".$ver."/php_dichvucoder.dll") : file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x86/php-".$ver."/php_dichvucoder.dll"));
$ini = trim(explode("\n", explode("Loaded Configuration File:", shell_exec("php --ini"))[1])[0]);
if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) file_put_contents($ini, file_get_contents($ini) . "\nenable_dl = On");
die("Auto-installation Done\n");
