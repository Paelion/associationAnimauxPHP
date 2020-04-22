<?php

namespace Database;

use Database\Database;

class createDatabase extends Database{


    /**
     * Créé la table correspondante dans la Db
     *
     * @param string $table
     * @param array $champs
     * @param array $foreigns
     */
    public function createTable($table, $champs = [], $foreigns = []){

        $statement = 'CREATE TABLE IF NOT EXISTS '. $table . '(';
        
        foreach ($champs as $key => $value) {
            $statement .= $key . ' ' . $value . ',';
        }
        $statement = substr($statement, 0, -1);
        if (!empty($foreigns)) {
            $statement .= $this->makeForeign($foreigns);
        }
        $statement .= ")";
        $this->pdo->exec($statement);
    }

    /**
     * Création de la table animal
     */

    public function createTableAnimal(){

        $this->pdo->exec('CREATE TABLE IF NOT EXISTS animal(
            
        )');
    }

    /**
     * Création de la table user
     */

    public function createTableUser(){

        $this->pdo->exec('CREATE TABLE IF NOT EXISTS user(
            
        )');
    }

    /**
     * Création de la table produit
     */

    public function createTableProduct(){

        $this->pdo->exec('CREATE TABLE IF NOT EXISTS product(
            
        )');
    }

    /**
     * Création de la table don
     */

    public function createTableDons(){
        $this->pdo->exec('CREATE TABLE dons(
            
            
            )');
    }

    /**
     * Création de la table commande
     */

    public function createTableCommande(){
        $this->pdo->exec('CREATE TABLE commande (
            
            
            )');
    }


    /**
     * Création de la table ligneCommande
     */

    public function createTableLigneCommande(){
        $this->pdo->exec('CREATE TABLE ligneCommande (
            
            
            )');
    }

    /**
     * Création de la table reservation
     */

    public function createTableReservation(){
        $this->pdo->exec('CREATE TABLE reservation (
            
            
            )');
    }





    public function makeForeign($foreigns)
    {
        $statement = ", ";

        foreach ($foreigns as $key => $value) {
            $statement .= 'FOREIGN KEY(' . $key . ') REFERENCES ' . $value . ',';
        }
        $statement = substr($statement, 0, -1);
        return $statement;
    }
}
