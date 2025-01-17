<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Template Stylesheet -->
    <link href="style1.css" rel="stylesheet">
</head>
<body>
    <!--Header-->
    <?php include('adminheader.php');?>
    <!-- /Header -->

    <?php
    // Include database connection details
    require_once('connection.php');

    if(isset($_POST['submit']) && isset($_FILES["image1"]) && isset($_FILES["image2"]) && isset($_FILES["image3"]) && isset($_FILES["image4"]) && isset($_FILES["image5"]) && isset($_FILES["puc"]) && isset($_FILES["insurance"])) {
        $vehicleName = $_POST['vehicle_name'];
        $vehicleBrand = $_POST['vehicle_brand'];
        $vehicleNumberPlate = $_POST['vehicle_number_plate'];
        $model = $_POST['model'];
        $mileage = $_POST['mileage'];
        $vehicleType = $_POST['vehicle_type'];
        $vehicleType1 = $_POST['vehicle_type1'];
        $capacity = $_POST['capacity'];
        $price1 = $_POST['price1'];
        $price2 = $_POST['price2'];
        $price3 = $_POST['price3'];
        $price4 = $_POST['price4'];
        $fuelType = $_POST['fuel_type'];
        $description = $_POST['description'];
        $image1 = $_FILES["image1"]["name"];
        $image2 = $_FILES["image2"]["name"];
        $image3 = $_FILES["image3"]["name"];
        $image4 = $_FILES["image4"]["name"];
        $image5 = $_FILES["image5"]["name"];
        $puc = $_FILES["puc"]["name"];
        $insurance = $_FILES["insurance"]["name"];

        $tmpfile1 = $_FILES['image1']['tmp_name'];
        $target = "Vehicle_img";
        $filename1 = "$target/$image1";
        move_uploaded_file($tmpfile1, "$filename1");

        $tmpfile2 = $_FILES['image2']['tmp_name'];
        $filename2 = "$target/$image2";
        move_uploaded_file($tmpfile2, "$filename2");

        $tmpfile3 = $_FILES['image3']['tmp_name'];
        $filename3 = "$target/$image3";
        move_uploaded_file($tmpfile3, "$filename3");

        $tmpfile4 = $_FILES['image4']['tmp_name'];
        $filename4 = "$target/$image4";
        move_uploaded_file($tmpfile4, "$filename4");

        $tmpfile5 = $_FILES['image5']['tmp_name'];
        $filename5 = "$target/$image5";
        move_uploaded_file($tmpfile5, "$filename5");

        $tmppuc = $_FILES['puc']['tmp_name'];
        $pucfile = "$target/$puc";
        move_uploaded_file($tmppuc, "$pucfile");

        $tmpinsurance = $_FILES['insurance']['tmp_name'];
        $insurancefile = "$target/$insurance";
        move_uploaded_file($tmpinsurance, "$insurancefile");

        $sql = "INSERT INTO tblvehicles (vehicle_name, vehicle_brand, vehicle_number_plate, model, mileage, vehicle_type, vehicle_type1, capacity, priceph, pricepd, dpriceph, dpricepd, fuel_type, description, image1, image2, image3, image4, image5, puc, insurance) VALUES ('$vehicleName', '$vehicleBrand', '$vehicleNumberPlate', '$model', $mileage, '$vehicleType', '$vehicle_type1', '$capacity', $price1, $price2, $price3, $price4, '$fuelType', '$description', '$filename1', '$filename2', '$filename3', '$filename4', '$filename5', '$pucfile', '$insurancefile')";

        if ($con->query($sql) === TRUE) {
            echo '<script>alert("new record added successfully")</script>';
            echo '<script> window.location.href = "vehiclelisting.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    ?>

    <form action="vehiclelisting.php" method="post" enctype="multipart/form-data">
        <label for="vehicle_name">Vehicle Name:</label>
        <input type="text" id="vehicle_name" name="vehicle_name" required>

        <label for="vehicle_brand">Vehicle Brand:</label>
        <select id="vehicle_brand" name="vehicle_brand" required>
            <option value="">Select Brand</option>
            <option value="Maruti Suzuki">Maruti Suzuki</option>
            <option value="Hero">Hero</option>
            <option value="Force">Force</option>
            <option value="Honda">Honda</option>
            <option value="Nissan">Nissan</option>
            <option value="Scoda">Scoda</option>
            <option value="Tata">Tata</option>
            <option value="Passion">Passion</option>
            <option value="Pulser">Pulser</option>
        </select><br>

        <label for="vehicle_number_plate">Vehicle Number Plate:</label>
        <input type="text" id="vehicle_number_plate" name="vehicle_number_plate" required>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required>

        <label for="mileage">Mileage (km/litre):</label>
        <input type="number" id="mileage" name="mileage" required>

        <label for="vehicle_type">Gear Type:</label>
        <select id="vehicle_type" name="vehicle_type" required>
            <option value="">Select Type</option>
            <option value="Manual">manual</option>
            <option value="Automatic">automatic</option>
        </select><br>

        <label for="vehicle_type1">Vehicle Type:</label>
        <select id="vehicle_type1" name="vehicle_type1" required>
            <option value="">Select Type</option>
            <option value="2 wheeler">2 wheeler</option>
            <option value="4 wheeler">4 wheeler</option>
            <option value="traveller">traveller</option>
        </select><br>

        <label for="capacity">Capacity (seating):</label>
        <input type="text" id="capacity" name="capacity" required>

        <label for="price">Price (per hour):</label>
        <input type="text" id="price" name="price1" min="0" required>

        <label for="price">Price (per day):</label>
        <input type="text" id="price" name="price2" min="0" required>

        <label for="price">Price with driver (per hour):</label>
        <input type="text" id="price" name="price3" min="0" required>

        <label for="price">Price with driver (per day):</label>
        <input type="text" id="price" name="price4" min="0" required>

        <label for="fuel_type">Fuel Type:</label>
        <select id="fuel_type" name="fuel_type" required>
            <option value="">Select Fuel Type</option>
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
            <option value="CNG">CNG</option>
            <option value="Electric">Electric</option>
        </select><br>

        <div>
            <label for="image1">Image 1:</label>
            <input type="file" id="image1" name="image1">
        </div>

        <div>
            <label for="image2">Image 2:</label>
            <input type="file" id="image2" name="image2">
        </div>

        <div>
            <label for="image3">Image 3:</label>
            <input type="file" id="image3" name="image3">
        </div>

        <div>
            <label for="image4">Image 4:</label>
            <input type="file" id="image4" name="image4">
        </div>

        <div>
            <label for="image5">Image 5:</label>
            <input type="file" id="image5" name="image5">
        </div><br>

        <div>
            <label for="puc">PUC (PDF):</label><br>
            <input type="file" id="puc" name="puc">
        </div><br>

        <div>
            <label for="insurance">Insurance (PDF):</label><br>
            <input type="file" id="insurance" name="insurance">
        </div><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit" name="submit">Submit Listing</button>
    </form>

    <!-- footer start -->
    <?php include('footer.php');?>
    <!-- footer end -->
</body>
</html>