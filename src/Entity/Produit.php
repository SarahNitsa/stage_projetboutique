<?php 
    function connect_bd() { 
        $dsn = 'mysql:dbname=boutiques;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }
    
    function getProduit(){
        /* 1. Connexion à une base MySQL avec l'invocation de pilote */
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("select * from produit")->fetchAll();
    // print_r($resultat);
        return $resultat;
    }


    function supprimer_produit(){
        $dbh=connect_bd();
        $id=$_GET['id']; 
        // 2 la requete de suppression
        $dbh->query(
            "delete from produit where id=$id"
        );
    }

    ?>