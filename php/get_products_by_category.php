<?php
// Include your database connection file here
include "../admin/config/dbconnect.php";

// Check if the category_id is set and not empty
if (isset($_POST['category_id']) && !empty($_POST['category_id'])) {
    $category_id = $_POST['category_id'];
    $type = $_POST['type'];
    if($category_id == '-1'){
        $productSql = "SELECT * FROM sanpham";
    }else{
        $productSql = "SELECT * FROM sanpham WHERE id_dm = $category_id";
    }
    if($type == '1'){
        $productSql = $productSql ;
    }
    // Query products based on the selected category
    $productResult = mysqli_query($conn, $productSql);

    if ($productResult) {
        // Display products
        while ($productRow = mysqli_fetch_assoc($productResult)) {
            echo "<div class='row'>";
            echo "<img src='../admin/img/{$productRow['anh_mota']}' alt=''>";
            echo "<h4>{$productRow['ten_sp']}</h4>";
            echo "<br><h5>$ {$productRow['gia_sp']}</h5>";
            
            echo "<div class='bbtn'>";
            echo "<a href='#' class='js-add-cart'>Thêm vào giỏ hàng</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        // Handle query error
        echo "Error fetching products: " . mysqli_error($conn);
    }
} else {
    // Handle invalid category_id
    echo "Invalid category ID";
}
?>