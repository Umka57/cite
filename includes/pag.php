<?php 
    // require_once 'connect.php';
    
    function get_items($limit,$offset,$connect){
        $query = "SELECT * FROM `products` LIMIT $limit OFFSET $offset";
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        return $result;
    }
    
    function count_pages($limit,$connect){
        $query = "SELECT COUNT(*) as count FROM `products`";
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $count = mysqli_fetch_assoc($result)['count'];
        $count = ceil($count / $limit);
        return $count;
    }
?>
