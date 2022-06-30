<?php 
$commentsFilepath = __DIR__ . '/comments.json';
$comments = json_decode(file_get_contents($commentsFilepath)); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Commentaires</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h2>Commentaires</h2>
        <form method="POST" action="./post-handler.php">
            <textarea name="comment"></textarea>
            <input type="submit" />
        </form>
        
        <div class="comments">
            <?php
            foreach($comments as $index => $comment)
            {
                $humanCounter = $index+1;
                print "<p>Commentaire {$humanCounter}: " . nl2br($comment) . "</p>";
            }
            ?>
        </div>
    </body>
</html>
