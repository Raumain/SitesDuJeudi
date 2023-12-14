<style>
    div#forms {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 200px;
    }
</style>
<div id="forms">
    <form action="treatment.php" method="post">
        <h1>Question piège : </h1>
        <label for="question-piege">Tu veux quoi :</label>
        <input type="text" id="question-piege" name="question-piege" placeholder="attention à ta réponse...">
        <input type="submit" value="Soumettre question">
    </form>
</div>


<?php include "content/todoDisplay.php" ?>