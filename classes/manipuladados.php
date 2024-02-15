<?php

include_once("conexao.php");

class manipuladados extends conexao{

    protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId, $descricao, $valor,$titulo, $endereco, $url;

    public function setTable($t){
        $this->table = $t;
    }
    public function setFields($f){
        $this->fields = $f;
    }
    public function setDados($d){
        $this->dados = $d;
    }
    public function getStatus(){
        return $this->status;
    }
    public function insert(){
        $this->sql="INSERT INTO $this->table($this->fields) VALUES ($this->dados)";
        if(self::execSQL($this->sql)){
            $this->status ="imagem salva com sucesso!";
        }else{
            $this->status ="Erro ao salvar".mysqli_error();
        }
    }
    public function update(){
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId = '$this->valueId'";
        if(self::execSQL($this->sql)){
            $this->status= "Imagem alterada com sucesso!".$this->sql;
        }else{
            $this->status ="Erro ao alterar!".$this->table."".mysqli_error();
        }
    }
    public function delete(){
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
        if(self::execSQL($this->sql)){
            $this->status= "Imagem excluida com sucesso!";
        }else{
            $this->status ="Erro ao excluir!".$this->table."".mysqli_error();
        }
    }
    public function getAllDataTable(){
        $this->sql = "SELECT * FROM $this->table";
        $this->qr = self::execSQL($this->sql);
        return $this->qr;
    }
    public function getCarretas(){
        $this->sql = "SELECT * FROM $this->table WHERE status=0";
        $this->qr = self::execSQL($this->sql);
        return $this->qr;

    }  public function getPecas(){
        $this->sql = "SELECT * FROM $this->table WHERE status=1";
        $this->qr = self::execSQL($this->sql);
        return $this->qr;
    }
    public function getParceiro(){
        $this->sql = "SELECT * FROM $this->table ";
        $this->qr = self::execSQL($this->sql);
        return $this->qr;
    }
     public function validarLogin($login, $password){
        $this->sql = "SELECT * FROM tb_usuario WHERE nome = '$login' and senha = '$password'";
        $this->query = self::execSQL($this->sql);
        $linhas = @mysqli_num_rows($this->qr);
        return $linhas;
    }

    public function setFieldId($fid){
        $this->fieldId=$fid;
    }
    public function setValueId($vid){
        $this->valueId=$vid;
    }


}

?>