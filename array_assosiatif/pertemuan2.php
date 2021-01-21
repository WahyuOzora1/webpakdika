<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width:30px;
            height: 30px;
            background-color: greenyellow;
            text-align:center;
            margin: 3px;
            float:left;
            line-height: 30px;
            transition: ease-in-out 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    
        .clear {
             clear: both;
         }
    </style>
   
</head>
<body class="html">
<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>


<?php 



$huruf = [
    ["a","b","c"], 
    ["d","e","f"], 
    ["g","h","i"]
];
?>

<?php foreach ($huruf as $hur) : ?>
    <?php foreach ($hur as $h) : ?>
        <div class="kotak"><?= $h; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?> 

</body>
</html>