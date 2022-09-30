<html lang="en">
    <head>
    <title>Hello world page</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <ul class="nav justify-content-center nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="circle.php">Упражнение 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sorting.php">Упражнение 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="console.php">Упражнение 3</a>
        </li>
    </ul>
        <h1>Таблица пользователей данного продукта</h1>
        <table>
            <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
        <?php
            $mysqli = new mysqli("db", "user", "password", "appDB");
            $result = $mysqli->query("SELECT * FROM users");
            foreach ($result as $row){
                echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
            }
        ?>
        </table>
        <?php
        phpinfo();
        ?>
    </body>
</html>
