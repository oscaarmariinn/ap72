<?php
class Conexion
{
    private $host;
    private $userName;
    private $password;
    private $db;
    protected $conn;
    private $configFile = "conf.json";

    public function __construct()
    {
        $this->connect();
    }

    public function __destruct()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    public function connect()
    {
        if (!file_exists($this->configFile)) {
            die("Unable to open file!");
        }

        $configData = file_get_contents($this->configFile);
        $config = json_decode($configData, true);

        $this->host = $config['host'];
        $this->userName = $config['userName'];
        $this->password = $config['password'];
        $this->db = $config['db'];

        $this->conn = new mysqli($this->host, $this->userName, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /**
     * Get the value of conn
     */
    public function getConn()
    {
        return $this->conn;
    }
}
