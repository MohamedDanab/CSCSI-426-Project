<?php
session_start();
if(!isset($_SESSION['admin']))
header("location:login.php?error=2");
?>
<?php
include("connection/connection.php");

$car_id = $_GET['ID'];
$sql = "SELECT * FROM cars WHERE id = '$car_id'";
$result = mysqli_query($con, $sql);
$car = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $carModel = $_POST['txt_car_model'];
    $carBrand = $_POST['txt_car_brand'];
    $purchase_price = $_POST['purchase_price'];
    $carPrice = $_POST['txt_car_price'];
    $carColor = $_POST['txt_car_color'];
    $carStatus = $_POST['txt_car_status'];

    $update_sql = $con->prepare("UPDATE cars SET 
                        db_car_model = ?, 
                        db_car_brand = ?, 
                        db_purchase_price = ?, 
                        db_car_price = ?, 
                        db_car_color = ?, 
                        db_car_status = ? 
                    WHERE id = ?");
    $update_sql->bind_param("ssddssi", $carModel, $carBrand, $purchase_price, $carPrice, $carColor, $carStatus, $car_id);
    $update_sql->execute();

    if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
        $sql_images = "SELECT img FROM car_images WHERE car_id = '$car_id'";
        $result_images = mysqli_query($con, $sql_images);

        while ($image = mysqli_fetch_assoc($result_images)) {
            $image_path = "images/" . $image['img'];
            if (file_exists($image_path)) {
                unlink($image_path); 
            }
        }

        $delete_images_sql = "DELETE FROM car_images WHERE car_id = '$car_id'";
        mysqli_query($con, $delete_images_sql);

        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['images']['name'][$key];
            $file_tmp = $_FILES['images']['tmp_name'][$key];
            $upload_path = "images/" . $file_name;

            if (move_uploaded_file($file_tmp, $upload_path)) {
                $query = "INSERT INTO car_images (car_id, img) VALUES ('$car_id', '$file_name')";
                mysqli_query($con, $query);
            }
        }
    }

    header("Location: dashboard.php");
    exit;
}
?>

<html>
<body>
<form method="POST" enctype="multipart/form-data" action="edit.php?ID=<?php echo $car['id']; ?>">
    <label for="txt_car_model">Car Model:</label>
    <input type="text" name="txt_car_model" value="<?php echo $car['db_car_model']; ?>" required><br><br>

    <label for="txt_car_brand">Car Brand:</label>
    <input type="text" name="txt_car_brand" value="<?php echo $car['db_car_brand']; ?>" required><br><br>

    <label for="purchase_price">Purchase Price:</label>
    <input type="number" name="purchase_price" value="<?php echo $car['db_purchase_price']; ?>" required><br><br>

    <label for="txt_car_price">Car Price:</label>
    <input type="number" name="txt_car_price" value="<?php echo $car['db_car_price']; ?>" required><br><br>

    <label for="txt_car_color">Car Color:</label>
    <input type="text" name="txt_car_color" value="<?php echo $car['db_car_color']; ?>" required><br><br>

    <label for="txt_car_status">Car Status:</label>
    <select name="txt_car_status">
        <option value="Available" <?php echo ($car['db_car_status'] == 'Available') ? 'selected' : ''; ?>>Available</option>
        <option value="Sold" <?php echo ($car['db_car_status'] == 'Sold') ? 'selected' : ''; ?>>Sold</option>
    </select><br><br>

    <label for="images">Upload New Images (if you want to change):</label>
    <input type="file" name="images[]" multiple><br><br>

    <button type="submit">Update Car Details</button>
</form>
</body>
</html>

<style>
    form {
    width: 40%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 8px;
    display: inline-block;
    color: #333;
}

input[type="text"],
input[type="number"],
select,
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}

input[type="text"]:focus,
input[type="number"]:focus,
select:focus,
input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

button[type="submit"] {
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    form {
        width: 90%;
    }

    button[type="submit"] {
        font-size: 14px;
    }
}

select {
    background-color: #fff;
}


.success-message,
.error-message {
    padding: 10px;
    margin: 10px 0;
    border-radius: 4px;
    color: white;
    font-size: 16px;
}

.success-message {
    background-color: #28a745;
}

.error-message {
    background-color: #dc3545;
}

input[type="file"] {
    padding: 5px;
}

input[type="file"]:focus {
    border-color: #007bff;
}
</style>
