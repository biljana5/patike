<?php
class Database{
private $hostname="localhost";
private $username="root";
private $password="";
private $dbname;
private $dblink;
private $result;

function getResult(){
    return $this->result;
}

function __construct($dbname){
    $this->dbname=$dbname;
    $this->Connect();
}

function Connect(){
 $this->dblink=new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
   if($this->dblink->connect_errno){
    echo "Neuspesna konekcija na bazu";
    exit();
  }
}

function select($kolona, $tabela, $uslov=null, $order=null){
    $select=' SELECT '.$kolona. ' FROM '.$tabela;
    if($uslov!=null){
        $select.=' WHERE '.$uslov;
    }

    if($order!=null){
    $select.=' ORDER BY '.$order;
    }

    if($this->ExecuteQuery($select)){
        return true;
    }else{
        return false;
    }
}


function select2($naredba)
{

    if($this->ExecuteQuery($naredba)){
        return true;
    }else{
        return false;
    }

}


function ExecuteQuery($query){
    if($this->result=$this->dblink->query($query)){
        return true;
    }else{
        return false; 
    }
}


function insert ($tabela, $kolona, $vrednost){
    $insert = 'INSERT INTO '.$tabela;  
                if($kolona != null)  
                {  
                    $insert .= ' ('.$kolona.')';   
                }  
                $insert .= ' VALUES(';
                $insert .="'".$vrednost[0]."', '".$vrednost[1]."', '".$vrednost[2]."', '".$vrednost[3]."', '".$vrednost[4]."', '".$vrednost[5]."')";
                //echo $insert;
    if ($this->ExecuteQuery($insert))
    return true;
    else return false;
    }

    function insert2 ($tabela, $kolona, $vrednost){
        $insert = 'INSERT INTO '.$tabela;  
                    if($kolona != null)  
                    {  
                        $insert .= ' ('.$kolona.')';   
                    }  
                    $insert .= ' VALUES(';
                    $insert .="'".$vrednost[0]."', '".$vrednost[1]."', '".$vrednost[2]."', '".$vrednost[3]."', '".$vrednost[4]."')";
                    echo $insert;
        if ($this->ExecuteQuery($insert))
        return true;
        else return false;
        }



        

function update($tabela, $kolone, $noveVrednosti, $uslov){
    $update=' UPDATE '.$tabela. ' SET '.$kolone[0].'="'.$noveVrednosti[0].'", '.$kolone[1].'="'.$noveVrednosti[1].'", '.$kolone[2].'="'.$noveVrednosti[2].'" WHERE '.$uslov;
    echo $update;
    if($this->ExecuteQuery($update)){
        return true;
    }else{
        return false;
    }
    }







    
function delete($tabela, $uslov){
    $delete='DELETE FROM '.$tabela.' WHERE '.$uslov;
    echo $delete;
    if($this->ExecuteQuery($delete)){
        return true;
    }else{
        return false;
    }
    }



}
?>