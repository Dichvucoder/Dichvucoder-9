?><?php
$os = "";
$name = "pthreads"; // Module name
$version = substr(str_replace(".", "", phpversion()), 0, 2);
if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
  $machine = posix_uname()["machine"];
} elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
  $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
  //$compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
}
if((int)$version >72){
  print_r("Install failed!\n");
  goto end;
}
if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
  $os = "linux";
} elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
  $os = "windows";
} else {
  exit("Error : Do not support feature for operating system: ".strtoupper(PHP_OS)."\n");
}
$ext_dir = ini_get("extension_dir");
if ($os == "linux") {
  $tmp = $_SERVER["PREFIX"]."/Dichvucoder/tmp/";
  $prefix = $_SERVER["PREFIX"]."/Dichvucoder/";
} else {
  $tmp = $_SERVER["PREFIX"]."\\Dichvucoder\\tmp\\";
  $prefix = $_SERVER["PREFIX"]."\\Dichvucoder\\";
}
$file_zip = $tmp.$name.".zip";
$zipArchive = new ZipArchive();
if ($zipArchive->open($file_zip)) {
    $k = $tmp.rand(1000000,9999999);
    mkdir($k);
    if($os == "linux"){
      $zipArchive->extractTo($k."/");
      copy($k."/linux/php".$version."/".$machine."/".$name.".so", $ext_dir."/".$name.".so");
      system("cp -rf ".$k."/linux/php".$version."/".$machine."/usr/* ".$prefix."/php".$version."/");
    }else{
      $zipArchive->extractTo($k."\\");
      copy($k."\\windows\\php".$version."\\".$machine."\\php_".$name.".dll", $prefix."\\php".$version."\\bin\\".$ext_dir."\\php_".$name.".dll");
      system("copy /Y ".$k."\\windows\\php".$version."\\".$machine."\\usr\\* ".$prefix."\\php".$version."\\");
    }
    rmdir($k);
    unlink($file_zip);
} else {
    printf('Open file source error');
    unlink($file_zip);
    exit;
}
Dichvucoder\libs::set_php($version);
end: