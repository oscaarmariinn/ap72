<?php
class Model extends Connection

{
    //Ejercicio 2
    private function getAllProducts()
    {
        $sql = "SELECT * FROM PRODUCTO";
        return $this->conn->query($sql);
    }
 
    public function showAllProducts()
    {
        $result = $this->getAllProducts();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['PROD_NUM'] . "</div>
                <div class='divTableCell'>" . $row['DESCRIPCION'] . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }
    //Ejercicio 3
    private function getAllEmp()
    {
        $sql = "SELECT EMP_NO, APELLIDOS, DEPT_NO, SALARIO, FECHA_ALTA FROM EMP";
        return $this->conn->query($sql);
    }
    public function showAllEmp()
    {
        $result = $this->getAllEmp();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['EMP_NO'] . "</div>
                <div class='divTableCell'>" . $row['APELLIDOS'] . "</div>
                <div class='divTableCell'>" . $row['DEPT_NO'] . "</div>
                <div class='divTableCell'>" . $row['SALARIO'] . "</div>
                <div class='divTableCell'>" . $row['FECHA_ALTA'] . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }
    //Ejercicio 4
    private function getAllClients($order){
        $sql = "SELECT CLIENTE_COD, NOMBRE, CIUDAD FROM CLIENTE ORDER BY CLIENTE_COD " .  $order;
        return $this->conn->query($sql);
    }
    public function showAllClients($order)
    {   
        $result = $this->getAllClients($order);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['CLIENTE_COD'] . "</div>
                <div class='divTableCell'>" . $row['NOMBRE'] . "</div>
                <div class='divTableCell'>" . $row['CIUDAD'] . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }
}