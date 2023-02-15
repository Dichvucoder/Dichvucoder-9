        $loader = "";
        $ver = substr(trim($version),0,3);
        if($ver == "7.4"){
          if(stripos($machine,"x64") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x64/php-7.4/php_dichvucoder.dll");
          }elseif(stripos($machine,"x86") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x86/php-7.4/php_dichvucoder.dll");
          }else{
            die("Only supports x64 or x86\n");
          }
        }elseif($ver == "8.2"){
          if(stripos($machine,"x64") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x64/php-8.2/php_dichvucoder.dll");
          }elseif(stripos($machine,"x86") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x86/php-8.2/php_dichvucoder.dll");
          }else{
            die("Only supports x64 or x86\n");
          }
        }elseif($ver == "8.1"){
          if(stripos($machine,"x64") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x64/php-8.1/php_dichvucoder.dll");
          }elseif(stripos($machine,"x86") !== false){
            $loader = file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/extension/x86/php-8.1/php_dichvucoder.dll");
          }else{
            die("Only supports x64 or x86\n");
          }
        }else{
          die("Only supports auto-installation for PHP 7.4,8.1 or 8.2\n");
        }
        file_put_contents(ini_get("extension_dir")."/php_dichvucoder.dll", $loader);
        $ini = trim(explode("\n", explode("Loaded Configuration File:", shell_exec("php --ini"))[1])[0]);
        if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {
          file_put_contents($ini, file_get_contents($ini)."\nenable_dl = On");
        }die("Auto-installation Done\n");
