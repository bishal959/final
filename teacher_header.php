<?php
$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "return_url": "http://example.com/",
    "website_url": "https://example.com/",
    "amount": "1000",
    "purchase_order_id": "Order01",
        "purchase_order_name": "test",

    "customer_info": {
        "name": "Test Bahadur",
        "email": "test@khalti.com",
        "phone": "9800000001"
    }
    }

    ',
    CURLOPT_HTTPHEADER => array(
        'Authorization: key live_secret_key_44ab453138194d52a9db8b4908a224dd',
        'Content-Type: application/json',
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

   
?>
<html>
    <head>
        <link rel="stylesheet" href="./sass/header.css">
    </head>
    <body>
        <header class="header">
            <a href="html.php"><h1>Attendance Management System</h1></a>
                <ul class="header-ul">
                <li><a href="download.php">download attendance</a></li>
                <li><a href="test.php">Attendance</a></li>
                <li><a href="listattendance.php">list attendance</a></li>
                <li><a href="liststudent.php">list student</a></li>
                <li><a href="session.php" >Hello, <?php print_r($_SESSION['teacher_name']); ?></a></li>
                <li><a href="logout.php" class="logout">logout</a></li>
            </ul>
        </header>
    </body>
</html>
