<?
ob_start();
session_start();

    if(!isset($_SESSION["intLine"])){
        $_SESSION["intLine"] = 0;
        $_SESSION["strcode"][0] = $_POST["code"];
        $_SESSION["strqty"][0] = 1;
        header('Location: '.'viewpsearch.php');
    }else{
        $key = array_search($_POST["code"], $_SESSION["strcode"]);
            if((string)$key != ""){
                $_SESSION["strqty"][$key] =+ 1;
            }else{
                $_SESSION["intLine"] =+ 1;
                $intNewLine = $_SESSION["intLine"];
                $_SESSION["strcode"][$intNewLine] = $_POST["code"];
                $_SESSION["strqty"][$intNewLine] = 1;
            }
            header('Location: '.'viewpsearch.php');
    }
?>