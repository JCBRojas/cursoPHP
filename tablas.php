<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <table border="2">
        <thead>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Programa</th>
            <th>Editar</th>
        </thead>
        <tbody>
           

                <tr>
                    <td>pepito </td>
                    <td>Perez</td>
                    <td>Analisis y Programación</td>
                    <td> 
                        <button>Editar</button>
                    </td>
                </tr>

  
        </tbody>
    </table>


    <?php    
    include "form.php"; 
    // require "form.php";    
       ?>

</body>

</html>

CRUD
1. CREATE    insert
2. READ      select
3. UPDATE    update
4. DELETE    delete