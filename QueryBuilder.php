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
    function insertDipendente($first_name, $last_name, $gender, $birth_date, $hire_date)
    {
        $sql = "INSERT INTO employees (first_name, last_name, birth_date, hire_date, gender) VALUES ('{$first_name}', '{$last_name}',
        '{$birth_date}', '{$hire_date}', '{$gender}')";
        var_dump($sql);
        $statement = $this->pdo->prepare($sql);
        try {
            $statement->execute();
            echo "added with success";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    function update($first_name, $last_name, $gender, $birth_date, $hire_date, $id)
    {
        $sql = "UPDATE employees SET `first_name` = {$first_name}, `last_name` =  {$last_name}, 'birth_date'= {$birth_date}, `hire_date` = {$hire_date},  WHERE (`id` = {$id})";
        $statement = $this->pdo->prepare($sql);
        try {
            $statement->execute();
            echo "updated with success";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    function delete($dipendente)
    {
        $sql = "DELETE FROM employees WHERE `id` = {$dipendente->id}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
