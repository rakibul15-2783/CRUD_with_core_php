<?php
    $con = new mysqli('localhost','root','','php_practice');
    
    $action = $_POST['action'];
    $action();

    function insert(){
        global $con;
        
        $name = $_POST['name'];
        $des = $_POST['des'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        if ($name == ""){
            echo "Name Field is Required";
        }
        elseif ($des == ""){
            echo "Description Field is Required";
        }
        elseif ($price == ""){
            echo "Price Field is Required";
        }
        elseif ($status == ""){
            echo "Status Field is Required";
        }
        else{
            $qur = $con->query("INSERT INTO tbl_student(name,des,price,status)VALUES('$name','$des','$price','$status')");
        if($qur){
            echo "Data Submitted";
        }
        else{
            echo "Something Went Wrong";
        }
        }
        
    }

    function show(){
        global $con;
        $qur = $con->query("SELECT * FROM tbl_student");
        $alldata = "";
        $status ="";
        while($data = $qur->fetch_assoc()){
            if($data['status']=="1"){
                $status = "<button value='".$data["id"]."' class='btn btn-info active-btn' >Active</button>";
            }
            else{
                $status = "<button value='".$data["id"]."' class='btn btn-warning inactive-btn'>Inactive</button>";
            }
            $alldata .= "<tr>
            <td>".$data['name']."</td>
            <td>".$data['des']."</td>
            <td>".$data['price']."</td>
            <td>".$status."</td>
            <td>
                <button value='".$data["id"]."' class='btn btn-info edit-btn'  >Edit</button>
                <button value='".$data["id"]."' class='btn btn-danger delete-btn' >Delete</button>
            </td>
            
            </tr>";
        }
        echo $alldata;
    }

    function active(){
        global $con;
        $id = $_POST['id'];
        $qur = $con->query("UPDATE tbl_student SET status='2' WHERE id='$id'");
        if($qur){
            echo "Status Changed";
        }
    }
    function inactive(){
        global $con;
        $id = $_POST['id'];
        $qur = $con->query("UPDATE tbl_student SET status='1' WHERE id='$id'");
        if($qur){
            echo "Status Changed";
        }
    }
    function delete(){
        global $con;
        $id = $_POST['id'];
        $qur = $con->query("DELETE FROM tbl_student WHERE id='$id'");
        if($qur){
            echo "Item Delete";
        }
    }
    function edit(){
        global $con;
        $id = $_POST['id'];
        $qur = $con->query("SELECT * FROM tbl_student WHERE id='$id'");
        $data = $qur->fetch_assoc();
        echo json_encode($data);
    }
    function update(){
        global $con;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['des'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        if ($name == ""){
            echo "Name Field is Required";
        }
        elseif ($des == ""){
            echo "Description Field is Required";
        }
        elseif ($price == ""){
            echo "Price Field is Required";
        }
        elseif ($status == ""){
            echo "Status Field is Required";
        }
        else{
            $qur = $con->query("UPDATE tbl_student SET  name='$name',des='$des',price='$price',status='$status' WHERE id='$id'");
        if($qur){
            echo "Data Updated";
        }
        else{
            echo "Something Went Wrong";
        }
        }
        
    }
?>