<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.com
Time        : 15-02-2023 Wednesday 20:37:05
IP          : 
Andress     : Hanoi - Hanoi
Country     : VN
Useragent   : 
Description : Abc Def__ Việt Nam
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("Bạn đang sử dụng thiếp bị không xác định !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>
���������03f3c919859dd88c02c81ef91466efcc05f89adf340929e79955aa48ebc3a72f1bcb6b5c7fd0be228f86096c7099c8e3���.7��L���E�iQqЯђo�<>��//�;�����&t��a��"|��?�Ћu�[q3qt�~Q�,Qjm9E���8�8N���{�G4(CHZ���XcG'�,���E�s>;'w� ��?̗IbysY{W}�؊���iA���w��;�L�H���%
�؈���-��-X:���[{���5x��,{��*i�r:��G�� mG6���P�|`D4>�Ll�=�m	��0��4����F���F��걑{���WGk�ű��Ycr��Fc�o�{)\V%x�����j�e�`,��c��b��bvN����9ϘA/C9����Qyx�-@�Wa�Zd��c����*s��8�1c/��j�"U�E-3��8�N�S�5��p�od`Y���4�o�ǂ���2�է����)B��r"�Lj8U�h�Y�;��/6e_._��ºJ�־v5�Sl�H\��ug���m6c16�I-���6" �5�m�<��T[�������Zzߴ��
Y�U,z�@��+���cA�!.�K*�|W��	�E%�!l96J�b�N#�zn�@'��KWd��M�{%qU ��Sr�c"@C�,㘟~�,���I��
��N������ ˃�J���y�E��F������k��H�X�U��y#~�b��}��b�Kh'�р�71;,('�k/Ҵ���Qj	������|4qa4�����a3���a�����Tuno���^wiH@�V��T��R�6���_���1�Gg�+[:�yX�6SEO�@
��G��@�h]��/��6�
C��KBear���P��R��D�~�r}��+��ʜ�y]�
-	A�矹,P��<�&�1]T������!��<��EF��F}J�̇"�3)���0ؓ���B�$��w�]���Sx��[�`{�<�kTx�����G�s�9/�Z�.�82kH^�a���$E]��
Q���n�C���3YP��	S��j��%�a�ɗ�&�'4V�l�e���	~��^	�"+�X�\�I�	=�L�Z�T���J�����(}��ҘPs�+�,W:�m1#�b?L1!m���wf=�f�m��7T�hyj��$h����48ȋ���gM�-��o�c��q�+!�4�ۜu�
~
]�K��	0�1�B|B�4�D)��&?����ˉ�����F��>�t��6l\ۅ�����f�2�y)�'x�%r3"�����2�K�薆-[!*-����G����:1��%�s�f�9�jr�)&O�&�p�6��ybK�i�X����I:�#{�����+�h�&��؏��!4H]�^�M�;7�|�ْa`p���QC�r$p)CFR����қo���]/��i6��Q��EXT��e�k���]Lκ�t��'yb��8/uȈ���q��cZ�>��Z(����u+ AI�"�ـlr������q�'D,,�Ӷ#��u2dR���9y�\YR�p�so!D�w�t�E�IT^1�,��,�������,g��#�P�C�ft`/�pUd�g������K	#]F�֏'�#@}�/�]�ێ�������=8�TO���tF[�d��V�Ը�쩝�h����ǔ�_ٱ��]�"ر��u��4��^�����n�1�sx�;�A>"�֮^'��J�y��U삄T�a��u���ā�������ٹY�c�P�m_ Ѱ\2q�=o��½�ZZ�QN�%��g�Ӧ�F�����0n��o�B��6$2(Uꏄ�NC���J����ـ�� �]��M��-���8^�8��{̿���s�w3���t0\�d���8�	��ḅ_{���

C�0�yg�J�CB����D����*�j���s��O�V2�]U�А�k�����#e.E����;٧��nV�Xt�w��'�<#��vW,U���0���������VMN� ��2��`���%�p�dF�䯸��-so��,����և(���v&�㢯R��L��rrc�ر5c�L���9~1pu0\��'�U�~^��Pj�%�-o����H�KJ��*.N��e}������;we(g��V����y��y4�y���_�����0t-���o��)|��C��˲�C:D�/l?��"7�r���oz��r#�R�h:�����(շC��@l��6�O�����w�\���y����k�w&�"H/J[f��ԼS�T�\ڴTS���og�C�Td�7(�����bLw���v_�s�p�U�,�L1����p,�h�x;0��?��5���4$����P��~GX&�!pH�
G�@x3�cr�K��c>���4SS{x^+a�cL��$5����m�]m�� ���Z��V#�ѐ����wZ��}�fȡ�EȽYVu/P�e԰:��\Kⷀ7��s������E��\qRM��/w����o��}�	GS��m��@����Ğz��Y��k�.�D�q�B
�DX�-�	���q#A	PD���Pm�;��x������