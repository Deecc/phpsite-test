<?php

function dbConnection ()
{
    try 
    {
        $PDO = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }
    catch (PDOException $e)
    {
        echo 'Erro ao se conectar ao banco de dados: ' . $e->getMessage();
    }
    return $PDO;
}

function makeHash ($str)
{
    return sha1(md5($str));
}

function isLoggedIn ()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
    return true;
}
