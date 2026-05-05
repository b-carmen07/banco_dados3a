<!-- CRUDE: create read update delete  -->
<!-- Classe abstrata é uma classe base que não pode ser instanciada e serve para compartilhar atributos com outras classes. -->

 <?php

 abstract class CRUD{
    protected $table;
    protected $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
              }

    abstract public function add();
    abstract public function update();

    public function all(){
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
 }