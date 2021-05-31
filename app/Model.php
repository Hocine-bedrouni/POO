<?php
// abstract => ne pourra pas être instancier directement, mais sera utiliser par héritage
abstract class Model
{
    private string $host = 'localhost:3306';
    private string $user = 'root';
    private string $password = 'admin';
    private string $dbname = 'record';

    protected $conn_record;

    public string $table;
    public string $id;


    public function GetConnection()
    {
        $this->conn_record = null;
        try {
            $this->conn_record = new PDO('mysql:host=' . $this->host . ';dbname' . $this->dbname, $this->user, $this->password);
            $this->conn_record->exec('setname utf8');
        } catch (PDOException $exception) {
            echo 'Erreur:' . $exception->getMessage();
        }
    }

    /**
     * méthode permettant de récupérer toutes les entrées d'une table
     * @return mixed
     */
    public function getAll()
    {
        $query = 'SELECT * FROM' . $this->table;
        $result = $this->conn_record->prepare($query);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    /**
     * @param string $id
     * @return mixed
     */
        public function getOne(string $id)
    {
        $this->id =$id;
        $query ='SELECT * FROM' .$this->table . 'WHERE `id` = :id';
        $result = $this->conn_record->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }
}