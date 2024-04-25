<?php
class DB {
    private $dbHost = "localhost:3306"; // Change this to your database host
    private $dbUsername = "root"; // Change this to your database username
    private $dbPassword = ""; // Change this to your database password
    private $dbName = "evente_4"; // Change this to your database name
    private $db; // Variable to hold the database connection
 
    public function __construct(){
        // Establish a database connection
        $this->db = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        if($this->db->connect_error){
            die("Failed to connect with MySQL: " . $this->db->connect_error);
        }
    }

    public function get_user($id) {
        // Prepare and execute a query to fetch user details by ID
        $stmt = $this->db->prepare("SELECT * FROM users WHERE google_uid = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }
 
    public function upsert_user($arr_data = array()) {
        // Escape input data to prevent SQL injection
        $uid = $this->db->real_escape_string($arr_data['sub']);
        $name = $this->db->real_escape_string($arr_data['name']);
        $email = $this->db->real_escape_string($arr_data['email']);
        $picture = $this->db->real_escape_string($arr_data['picture']);
 
        // Check if user exists
        $user = $this->get_user($uid);
 
        if(!$user) {
            // Insert the user if not exists
            $stmt = $this->db->prepare("INSERT INTO users (google_uid, name, email, picture) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $uid, $name, $email, $picture);
            $stmt->execute();
            $stmt->close();
        } else {
            // Update user data if already exists
            $stmt = $this->db->prepare("UPDATE users SET name = ?, email = ?, picture = ? WHERE google_uid = ?");
            $stmt->bind_param("ssss", $name, $email, $picture, $uid);
            $stmt->execute();
            $stmt->close();
        }
    }
}
?>
