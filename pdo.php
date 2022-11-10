<?php

    // Hàm kết nối CSDL

    function pdo_get_connection(){
        $hostname = "localhost";
        $dbname = "Dethiso8";
        $username = "root";
        $password = "";

        try {
            $connect = new PDO("mysql: host=$hostname; dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
        } catch (PDOException $e) {
            echo "Lỗi kết nối:".$e->getMessage();
        }
    }


    // Hàm thao tác CSDL


//     function pdo_execute($sql){
//         $sql_args = array_slice(func_get_args(), 1);
    

//     try {
//         //Kết nối CSDL
//         $connect = pdo_get_connection();
//         // Chuyển hóa Mysql
//         $stmt = $connect->prepare($sql);
//         // Thực thi
//         $stmt->execute($sql_args);
//     } catch (PDOException $e) {
//         throw $e;
//     }
//     finally{
//         unset($connect);
//     }



// }




//         // Hàm truy vấn nhiều dữ liệu

//         function pdo_query($sql){
//         $sql_args = array_slice(func_get_args(), 1);


//         try {
//         //Kết nối CSDL
//         $connect = pdo_get_connection();
//         // Chuyển hóa Mysql
//         $stmt = $connect->prepare($sql);
//         // Thực thi
//         $stmt->execute($sql_args);
//         } catch (PDOException $e) {
//         throw $e;
//         }
//         finally{
//         unset($connect);
//         }

//         }



        // Hàm đếm

        function pdo_query_value($sql){
            $sql_args = array_slice(func_get_args(), 1);
    
    
            try {
            //Kết nối CSDL
            $connect = pdo_get_connection();
            // Chuyển hóa Mysql
            $stmt = $connect->prepare($sql);
            // Thực thi
            $stmt->execute($sql_args);
            } catch (PDOException $e) {
            throw $e;
            }
            finally{
            unset($connect);
            }
    
            }

?>