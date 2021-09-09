<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        table {
            width: auto;
            border: solid 2px ;
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <table> 
        <thead>
            <th>N°</th>
            <th>Question & Réponse</th>       
            <th>Validation <br></th><br>
            <br>
        </thead><br>
        <tbody><br>
            <?php
            $nbrRep=1;
            foreach ($_SESSION['Tab_reponse'] as $t): ?>
                <?php foreach ($t as $q=> $rep): ?>
                <tr>
                <br>
                    <td><?= $nbrRep++; ?></td>
                    <td><?= $q?></td>
                    <td><?= $rep?></td>
                </tr>
                <?php endforeach; 
                
                ?>
                
             <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>