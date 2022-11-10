<?php  
        require "pdo.php";

        // pdo_get_connection();
        // $sql = "UPDATE rooms set room_name=? where room_id=?";
        // $room_name = "Khách sạn 5 sao";
        // $room_id=3;

        // pdo_execute($sql, $room_name, $room_id);
        // echo "Update thành công";

        $sql = "SELECT count(*) from rooms where room_id=?";
        $room_id=3;
        $count = pdo_query_value($sql, $room_id);

        
      
?>
