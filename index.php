<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Recommend Book</h1>
        <?php 
            $books = [
                "Book 1",
                "Book 2",
                "Book 3"
            ]
        ?>

        <ul>
            <?php foreach( $books as $book) {
                echo "<li>$book</li>";
            }

            ?>
        </ul>
    
</body>

</html>