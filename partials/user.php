<?php
require_once("connect.php");

class User extends Database{
    protected $tablename = "users";
    // function to add users
    public function addUser($data){
        if(!empty($data)){
            $fields = $placeholder = [];
            foreach($data as $field => $value){
                $fields[] = $field;
                $placeholder = ":{$field}";
            }
        }
        $sql = "INSERT INTO {$this -> tablename} (".implode(',',$fields).") VALUES (".implode(',',$placeholder).")";
        $stmt = $this->conn->prepare($sql);
        try{
            $this -> conn -> beginTransaction();
            $stmt -> execute($data);
            $lastInsertedId = $this -> conn -> lastInsertId();
            $this -> conn -> commit();
            return $lastInsertedId;
        }catch(PDOExceptions $e){
            echo "Error".$e->getMessage();
            $this -> conn -> rollback();
        }
    }
    // end of function to add users

    // function to get rows
    public function getRows($start=0,$limit=4){
        $sql = "SELECT * from {$this->tablename} ORDER BY DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        if($stmt -> rowCount() > 0){
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }else{
            $results = [];
        }
        return $results;
    }
    // end of function to get rows

    // function to get single row
    public function getRow($field,$value){
        $sql = "SELECT * from {$this->tablename} WHERE {$field}=:{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute([":{$field}" => $value]);
        if($stmt -> rowCount() > 0){
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        }else{
            $result = [];
        }
        return $result;
    }
    // end of function to get single row

    // function to count number of rows
    public function getCount(){
        $sql = "SELECT count(*) as pcount FROM {$this->tablename}";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $result["pcount"];
    }
    // end of function to count number of rows

    // function to upload photo
    public function uploadPhoto($file){
        if(!empty($file)){
            $fileTempPath = $file["temp_name"];
            $fileName = $file["name"];
            $fileType = $file["type"];
            $fileNameCmps = explode(".",$fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName).".".$fileExtension;
            $allowedExtn = ["jpg","png","jpeg"];
            if(in_array($fileExtension,$allowedExtn)){
                $uploadsFileDir = getcwd()."/uploads/";
                $destFilePath = $uploadsFileDir.$newFileName;
                if(move_uploaded_file($fileTempPath,$destFilePath)){
                    return $newFileName;
                }
            }
        }
    }
    // end of function to upload photo

    // function to update

    // end of function to update

    // function to delete

    // end of function to delete

    // Function to search users
    // End of Function to search users
}
?>