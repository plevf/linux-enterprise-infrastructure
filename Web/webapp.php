<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Webapp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        .doboz {
            background: white;
            width: 350px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px gray;
        }

        h1 {
            color: #0f3d5e;
            text-align: center;
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
        }

        button {
            background: #0f3d5e;
            color: white;
            border: none;
            margin-top: 15px;
        }

        .eredmeny {
            margin-top: 20px;
            padding: 10px;
            background: #e8f4ff;
            text-align: center;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="doboz">
    <h1>Összeadó</h1>

    <form method="post">
        <p>Első szám:</p>
        <input type="number" name="a" required>

        <p>Második szám:</p>
        <input type="number" name="b" required>

        <button type="submit">Összeadás</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $eredmeny = $a + $b;

        echo "<div class='eredmeny'><b>Az összeg: $eredmeny</b></div>";
    }
    ?>

    <a href="index.html">Vissza a főoldalra</a>
</div>

</body>
</html>
