<?php           //TODO Vue choix type test  form method=post



require_once ('views/views_accueil/viewHeader.php');
?>

<form action="" method="post">
<div class="type_account">
    <label for="id_test" >Choisir le test</label>
    <div class="type_account_container">
        <select name="id_test" id="type_account">
            <option value="1" >Test 1</option>
            <option value="2">Test 2</option>
            <option value="3">Test 3</option>
        </select>
    </div>
</div>
    <input type="submit" value="Envoyer">
</form>