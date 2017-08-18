<?php

class LeituraMensagem{
    
        //variáveis do banco de dados
    private static $tableDb="leitura_mensagem";    
    private static $tableColumns = array(
    "id"=>null,
    "date_insert"=>null,
    "date_read"=>null,
    "id_usuario"=>null,
    "id_mensagem"=>null,
    "is_read"=>null,
    );
    
    public $id;
    public $data_insert;
    public $data_read;
    public $id_usuario;
    public $id_mensagem;
    public $is_read;
    
    function __construct($id, $data_insert, $data_read, $id_usuario, $id_mensagem, $is_read) {
        $this->id = $id;
        $this->data_insert = $data_insert;
        $this->data_read = $data_read;
        $this->id_usuario = $id_usuario;
        $this->id_mensagem = $id_mensagem;
        $this->is_read = $is_read;
    }
    function getId() {
        return $this->id;
    }

    function getData_insert() {
        return $this->data_insert;
    }

    function getData_read() {
        return $this->data_read;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_mensagem() {
        return $this->id_mensagem;
    }

    function getIs_read() {
        return $this->is_read;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData_insert($data_insert) {
        $this->data_insert = $data_insert;
    }

    function setData_read($data_read) {
        $this->data_read = $data_read;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_mensagem($id_mensagem) {
        $this->id_mensagem = $id_mensagem;
    }

    function setIs_read($is_read) {
        $this->is_read = $is_read;
    }

        public static function read ($conexao,$condicao="true"){
    $sql="SELECT ";
    
    foreach(self::$tableColumns as $key => $keyValue){
        $sql.="$key,";        
    } 
    $sql=rtrim($sql, ',');
    $sql.=" FROM ".self::$tableDb;
    $sql.=" WHERE $condicao";
    $sqlStmt=$sql;

$param=array();    
    
    if (!is_string($sqlStmt) || empty($sqlStmt)) {
        return false;
    }

    // initialise some empty arrays
    $fields = array();
    $results = array();

    if ($stmt = $conexao->prepare($sqlStmt)) {
        // bind params if they are set
        if (!empty($params)) {
            $types = '';
            foreach($params as $param) {
                // set param type
                if (is_string($param)) {
                    $types .= 's';  // strings
                } else if (is_int($param)) {
                    $types .= 'i';  // integer
                } else if (is_float($param)) {
                    $types .= 'd';  // double
                } else {
                    $types .= 'b';  // default: blob and unknown types
                }
            }

            $bind_names[] = $types;
            for ($i=0; $i<count($params);$i++) {
                $bind_name = 'bind' . $i;       
                $$bind_name = $params[$i];      
                $bind_names[] = &$$bind_name;   
            }

            call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }

        // execute query
        $stmt->execute();

        // Get metadata for field names
        $meta = $stmt->result_metadata();

        // This is the tricky bit dynamically creating an array of variables to use
        // to bind the results
        while ($field = $meta->fetch_field()) { 
            $var = $field->name; 
            $$var = null; 
            $fields[$var] = &$$var;
        }

        // Bind Results
        call_user_func_array(array($stmt,'bind_result'),$fields);

        // Fetch Results
        $i = 0;
        $listaResultado=array();
        $argObj = array();
        while ($stmt->fetch()) {
            $results[$i] = array();
            
            foreach($fields as $k => $v){
                
                $results[$i][$k] = $v;
                array_push($argObj,$v);
            }
            $class = new ReflectionClass(__CLASS__);
            //$args  = array('id','usuario','senha','email','acesso_qualidade','acesso_ambiental');
            $instance = $class->newInstanceArgs($argObj);
            array_push($listaResultado,$instance);
            $argObj = array();
            $i++;
            
        }

        // close statement
        $stmt->close();
    }
   // echo "<pre>";
    //print_r($results);
    //print_r($listaResultado);
    //echo "</pre>";
    return $listaResultado;
}
    
    
}

