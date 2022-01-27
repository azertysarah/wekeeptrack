<?php
include 'views/head.php';
require('models/database.php');

$getAllQuestions = $bdd->query('SELECT * FROM questions');

while($question = $getAllQuestions->fetch()){
    ?>
    <div class="card">
         <div class="card-body">
            <p class="middleText"><?php echo $question['question']; ?></p>
        </div>
        <div class="card-footer">
            <p class="downText">Published by <?php echo $question['username_author'].' | '.$question['date']; ?></p>
        </div>
    </div>
        <a id="answersLink" href="contenu.php?id=<?php echo $question['id_question']; ?>" name="black">Answers</a>    
        <a id="deleteLink"href="#" name="black">Delete</a>
    <br>
    <hr>
    <?php
}
?>