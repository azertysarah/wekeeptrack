<?php 
    session_start();
    require('showContenu.php'); 
    require('controllers/qna/publish.answer.action.php');
    require('show.all.answers.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'views/head.php'?>

<body>
    <?php include 'views/navbar/navbar.admin.php';?>
    <br>
    
    <div>
        <?php
            if(isset($errorMsg)){echo $errorMsg;}

            if(isset($question_date)){
                ?>
                <!-- Espace question -->
                <section class="show-content">
                <h3>Question:</h3>
                    <h4><?php echo $question_question; ?></h4>
                    <p class="downText">Published by <?php echo $question_username_author.'|'.$question_date; ?></p>
                </section>
                <br>
                <hr>
                <br>

                <!-- Espace réponses -->
                <section class="show-answers">
                <h3>Answers: </h3>
                <br>
                    <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <p class="bold">From <?php echo $answer['username_author']; ?> </p>
                                </div>
                                <div class="card-body">
                                    <p><?php echo $answer['answer']; ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                        <form method="POST">
                        <br>
                        <textarea name="answer"></textarea>
                        <br>
                        <button type="submit" name="validate">Submit answer</button>
                    </form>
                </section>
                <?php
            }
        ?>
    </div>
</body>
</html>