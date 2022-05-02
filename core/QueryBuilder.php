<?php
class queryBuilder
{
    public $pdo;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll( String $intoClass, int $page)
    {
        $statement = $this->pdo->prepare("SELECT * FROM employees LIMIT {$page}, 10");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    function insertDipendente( $dipendente){
        $sql = "INSERT INTO employees (first_name, last_name, birth_date, hire_date) VALUES ({$dipendente['first_name']}, {$dipendente['last_name']},
        {$dipendente['birth_date']}, {$dipendente['hire_date']})";
       $statement = $this->pdo->prepare($sql);
       $statement->execute();
    }
    function update($dipendente){
        $sql = "UPDATE `employees` SET `first_name` = {$dipendente['first_name']}, `last_name` =  {$dipendente['last_name']}, 'birth_date'= {$dipendente['birth_date']}, `hire_date` = {$dipendente['hire_date']},  WHERE (`id` = {$dipendente['id']})";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    function delete($dipendente){
        $sql = "DELETE FROM employees WHERE `id` = {$dipendente['id']}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    
}
