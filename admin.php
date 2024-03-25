<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVOİCON -->
    <link rel="icon" href="img/favicon2.png" type="image/x-icon" />

    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 100%;
            padding-top: 30px;
        }
    </style>
    <title>Yazılımcı ve Sporcu</title>
</head>

<body>
    <?php include('C:/xampp/htdocs/Güncellemeler/inc/config.php'); ?>



    <section style="border-radius:10px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; width:700px;" class="p-5 text-center">



        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "iletisim";

        $baglanti = mysqli_connect($host, $user, $password, $db);

        if (!$baglanti) {
            echo "bağlanti başarısız";
        }







        $sec = "SELECT * FROM iletisimdekiler";
        $result = $baglanti->query($sec);

        if ($result->num_rows > 0) {
            echo "<table align='center' width='100%' class='mt-3'>";
            echo "<tbody align='center'>
        <tr>
            <th>İD</th>
            <th>MAİL</th>
            <th>PASS</th>
        </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["gelen_mail"] . "</td>";
                echo "<td>" . $row["gelen_text"] . "</td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "Veri bulunamadı";
        }
        ?>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>