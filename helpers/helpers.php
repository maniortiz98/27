<?php

function base_url()
{
    return BASE_URL;
}
function media()
{
    return BASE_URL."assets/";
}
function headeradmin($data="")
{
    $view_header ="views/template/header_admin.php";
    require_once ($view_header);
}
function footeradmin($data="")
{
    $view_footer ="views/template/footer_admin.php";
    require_once ($view_footer);
}


function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}


//elimina exceso de espacios limpia una cadena 
function strclean($strcadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strcadena); //limpiar el exceso de espacios
    $string = trim($string);                                            //elimina espacios en blanco al inicio y al final 
    $string = stripslashes($string);                                    //elimina las \ invertidas
    $string = str_ireplace("<script>","",$string);                      //esto evita inyecciones  
    $string = str_ireplace("</script>","",$string);
    $string = str_ireplace("<script src>","",$string);
    $string = str_ireplace("<script> type=>","",$string);
    $string = str_ireplace("SELECT * FROM","",$string);
    $string = str_ireplace("DELETE FROM","",$string);
    $string = str_ireplace("INSERT INTO","",$string);
    $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string = str_ireplace("DROP TABLE","",$string);
    $string = str_ireplace("OR '1'='1","",$string);
    $string = str_ireplace('OR "1"="1"',"",$string);
    $string = str_ireplace('OR `1`=`1`',"",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("LIKE '","",$string);
    $string = str_ireplace('LIKE "',"",$string);
    $string = str_ireplace("LIKE `","",$string);
    $string = str_ireplace("OR 'a'='a","",$string);
    $string = str_ireplace('OR "a"="a',"",$string);
    $string = str_ireplace("OR `a`=`a","",$string);
    $string = str_ireplace("OR `a`=`a","",$string);
    $string = str_ireplace("--","",$string);
    $string = str_ireplace("^","",$string);
    $string = str_ireplace("[","",$string);
    $string = str_ireplace("]","",$string);
    $string = str_ireplace("==","",$string);
    return $string;
}

    function passgenerator($Length =10)                       //servir para el registro de usuario
                                                              //dar una contraseña 
    {
        $pass = "";
        $longitudpass=$Length;
        $cadena ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudcadena=strlen($cadena);

        for($i=1; $i<=$longitudpass; $i++){
            $pos =rand(0,$longitudcadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }

    function token()                                           //restableser contraseña por medio de un token
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }

    function formatmoney($cantidad)
    {
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }

?>