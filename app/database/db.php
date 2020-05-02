<?php
session_start();
require('connect.php');



function dd($value) // just to get the values from the database
{

    echo "<pre>", print_r($value, true), "</pre>";
    die();

}


function executeQuery($sql, $data) // 8 - execute function will execute the query when we all this function
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param( $types, ...$values);
    $stmt->execute();
    return $stmt;
}

// var_dump($users);

// putting this above one into this function

//SELECT ALL FUNCTION//


function selectALL($table, $conditions = [])  //giving a new (optional)condition parameter to return only conditions(records) that we need it, this statement will tell how to create a insert statement with conditions
{

    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        //return condition records...

        $i = 0;
        foreach($conditions as $key => $value) {
            if($i === 0){
                $sql = $sql . " WHERE $key=?";    //select with condition-6
            } else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        // dd($sql);
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    
}


//SELECT ONE FUNCTION


function selectOne($table, $conditions)  //giving a new (optional)condition parameter to return only conditions(records) that we need it, this statement will tell how to create a insert statement with conditions
{

    global $conn;
    $sql = "SELECT * FROM $table";
    
        //return condition records...

        $i = 0;
        foreach($conditions as $key => $value) {
            if($i === 0){
                $sql = $sql . " WHERE $key=?";    //select with condition-6
            } else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
        // dd($sql);
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    
    
}


//create function - insert query

function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"
    $sql = "INSERT INTO $table SET ";                //data will come in this dynamically

    $i = 0;
    foreach($data as $key => $value) {
        if($i === 0){
            $sql = $sql . " $key=?";    //attaching the keys id of username on the data
        } else{
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    // dd($sql); to check the query into screen wheather it is working or not
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;

}

//UPDATE FUNCTION

function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users SET username=?, admin=?, password=? WHERE id=?"
    $sql = "UPDATE $table SET ";                //data will come in this dynamically

    $i = 0;
    foreach($data as $key => $value) {
        if($i === 0){
            $sql = $sql . " $key=?";    //attaching the keys id of username on the data
        } else{
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    // dd($sql); to check the query into screen wheather it is working or not
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows; //affeted_rows is basically, for if the data not updated and false -1 value

}



//Delete FUNCTION

function delete($table, $id)
{
    global $conn;
    // $sql = "DELETE FROM users WHERE id=?"
    $sql = "DELETE FROM $table WHERE id=?"; //data will come in this dynamically



    // dd($sql); to check the query into screen wheather it is working or not
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;     
}


