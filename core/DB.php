<?php 

class DB{

    # @bool ,  Connected to the database
    private $conn ;
    # @object, The PDO object
    private $db ;
    # @string , Database query Text
    private $query;


    /**
     * Default Constructor 
     *
     * 1. Instantiate Log class.
     * 2. Connect to database.
     */
    public function __construct(){

        require get_directory_path().'config.php';

        try{
            # Read settings from config file, set UTF8
            $this->db = new \PDO("mysql:host=$servername;dbname=$database", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            # We can now log any exceptions on Fatal error
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Connection succeeded, set the boolean to true.
            # Disable emulation of prepared statements, use REAL prepared statements instead.
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
            $this->conn = true;
        }
        catch(PDOException $e){
            # Connection Failed, set the boolean to false.
            $this->conn = false;
            # echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     *  - Check if there is a connection to the database or not
     *  - If there is no connection, it will return to false. 
     *  - If there is a connection, it will return true.
     * 
     *  @return bool
     */
    public function is_connection(){
        return $this->conn;
    }

    /**
     *  Returns a table name in the database.
     * 
     *  @param  string $table
     *  @return void
     */
    public function table($table){

        $this->query .= 'SELECT * FROM '.$table;

        return $this; 
    }

    /**
     *  Adds an SQL query WHERE clause to fetch a particular row.
     * 
     *  @param  string $string
     *  @return void
     */
    public function where($string){

        $this->query .= ' WHERE '.$string;

        return $this;
    }

    /**
     *  Returns the number of rows from the query.
     * 
     *  @return int
     */
    public function count(){

        $query = str_replace('*','count(*)',$this->query);
        $stmt = $this->db->prepare($query); 
        $stmt->execute();
        
        return $stmt->fetchColumn();
    }


   /**
     *  This function requires a name the table of database and
     *  an array with the field name with the value in the database. 
     * 
     *  @param  string $table
     *  @param  array $data
     *  @return int
     */
    public function insert($table,$data){

        # get array keys of var $data.
        $values = array_keys($data);
        # Convert array to string by implode function.
        $inputs = implode(',',$values);
        # Convert array to string by implode function.
        $vals = implode(',:',$values);

        try{
            # prepare to insert data into database
            $stmt = $this->db->prepare("INSERT INTO ".$table." (".$inputs.") VALUES (:".$vals.")");

            # Filter and manipulate inputs against any SQL injection
            foreach ($values as $value) {

                $execute[$value] = $data[$value];
            }
            # Perform the data insert process
            $stmt->execute($execute);

            return true;

        }catch (PDOException $e) {
            return false;
        }

    }

    /**
     *  This function requires a name the table of database , column name  and
     *  an array with the field name with the value in the database. 
     * 
     *  @param  string $table
     *  @param  int $id
     *  @param  array $data
     *  @return int
     */
    public function update($table,$id,$data){

        # get array keys of var $data.
        $inputs = array_keys($data);
        # Create a text string for the update query in the database
        foreach ($inputs  as $key) {
            $update_vals[] =  $key.'=:'.$key.' ';
        }

        # Convert array to string by implode function.
        $update_val = implode(',',$update_vals);

        try{

            # prepare to update data into database
            $stmt = $this->db->prepare("UPDATE ".$table." SET ".$update_val." WHERE id=:id");
            # Filter and manipulate inputs against any SQL injection
            foreach ($inputs as $value) {
                $execute[$value] = $data[$value];
            }

            $execute['id'] = $id;
            # Perform the data update process
            $stmt->execute($execute);

            return true;

        }catch (PDOException $e) {
            
            echo $e->getMessage();
            return false;
        }
    }


    /**
     *  Fetches the next row from a result set
     * 
     *  @return object
     */
    public function get(){
        
        try {
            
            $stmt = $this->db->prepare($this->query); 
            $stmt->execute();
        
            return $stmt->fetch(PDO::FETCH_OBJ);
            
        } catch (PDOException $e) {
            return false;
        }
    }

    /**
     *  reset query string.
     * 
     *  @return null
     */
    public function reset(){
        return $this->query = null;
    }

     /**
	*   If the SQL query  contains a SELECT or SHOW statement it returns an array containing all of the result set row
	*	If the SQL statement is a DELETE, INSERT, or UPDATE statement it returns the number of affected rows
	*
	*   @param  string $QueryString
	*	@return mixed
	*/
    public function query($QueryString){

        try {
            $this->db->query($QueryString);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}