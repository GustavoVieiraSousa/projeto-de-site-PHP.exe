<?php

class conexao {

    public static function connect(){

        try{
            return new PDO("mysql:host=localhost; dbname=pokemonsite", "root", "");
        }

        catch(PDOException $e) {

            echo "<span> {$e->getMessage()} </span>";

        }
    }

}
?>