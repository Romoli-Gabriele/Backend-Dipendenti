<?php
class dipentente
{
    public $id;
    public $first_name;
    public $last_name;
    public $birth_date;
    public $hire_date;

    public function __construct()
    {
        
    }
}

class queryBuilder
{
    public $pdo;
    public $intoClass;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->intoClass = "dipendente";
    }

    function selectAll($page)
    {
        $sql = "SELECT * FROM employees LIMIT 20 OFFSET {$page}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, "dipentente");
    }
    function insertDipendente($dipendente)
    {
        $sql = "INSERT INTO employees (first_name, last_name, birth_date, hire_date) VALUES ({$dipendente['first_name']}, {$dipendente['last_name']},
        {$dipendente['birth_date']}, {$dipendente['hire_date']})";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    function update($dipendente)
    {
        $sql = "UPDATE `employees` SET `first_name` = {$dipendente['first_name']}, `last_name` =  {$dipendente['last_name']}, 'birth_date'= {$dipendente['birth_date']}, `hire_date` = {$dipendente['hire_date']},  WHERE (`id` = {$dipendente['id']})";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    function delete($dipendente)
    {
        $sql = "DELETE FROM employees WHERE `id` = {$dipendente['id']}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
