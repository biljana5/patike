
<?php
class Database
{
private $hostname="localhost";
private $username="root";
private $password="";
private $dbname;
private $dblink; // veza sa bazom
private $result; // Holds the MySQL query result
private $records; // Holds the total number of records returned
private $affected; // Holds the total number of affected rows
function __construct($dbname)
{
$this->dbname = $dbname;
                $this->Connect();
}
/*
function __destruct()
{
$this->dblink->close();
//echo "Konekcija prekinuta";
}
*/
public function getResult()
{
return $this->result;
}
//konekcija sa bazom
function Connect()
{
$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
if ($this->dblink ->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$this->dblink->set_charset("utf8");
//echo "Uspesna konekcija";
}
//select funkcija
function select ($table="brend", $rows = 'naziv', $where = null, $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
	 if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 					
$this->ExecuteQuery($q);
//print_r($this->getResult()->fetch_object());
}


//funkcija za izvrsavanje upita
function ExecuteQuery($query)
{
if($this->result = $this->dblink->query($query)){
if (isset($this->result->num_rows)) $this->records         = $this->result->num_rows;
if (isset($this->dblink->affected_rows)) $this->affected        = $this->dblink->affected_rows;
// echo "Uspesno izvrsen upit";
return true;
}
else
{
return false;
}
}

function CleanData()
{
//mysql_string_escape () uputiti ih na skriptu vezanu za bezbednost i sigurnost u php aplikacijama!!
}

}

?>
