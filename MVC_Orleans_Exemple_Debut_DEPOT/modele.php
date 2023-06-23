<?php
    require("connect.php");

    function connect_db()
    {
        try
        {
            $connexion=new PDO(SGBD_CHAINE_CONNEXION,SGBD_USER,SGBD_PSWD);
        }
        catch(PDOException $e)
        {
            printf("Echec connexion : %s\n",
            $e->getMessage());
            exit();
        }
        return $connexion;
    }

    
?>