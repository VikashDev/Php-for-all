<?php 
    $jsondata = file_get_contents('movies.json');
    $json = json_decode($jsondata, true);

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Displying json contents in php</h1>
<ul>
    <?php 
        foreach($json['movies'] as $value) {
            echo "<h4>". $value['title'] . "</h4>";
            echo "<li>Year : ". $value['title'] . "</li>";
            echo "<li>Genes : ". $value['genre'] . "</li>";
            echo "<li>Directors : ". $value['director'] . "</li>";
        }
    
    
    
    ?>
</ul>
</body>
</html>