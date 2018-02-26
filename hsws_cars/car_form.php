<form name="test" method="post" action="" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h3>Name : <br>
        <input name="title" type="text" size="40">
    </h3>

    <?php
    $categories = get_terms('taxmodels', 'orderby=name&hide_empty=0');
    if($categories){
    ?>

    <h3>Model: <br></h3>
        <select name="models">
            <?php foreach ($categories as $cat){ ?>
                <option value="{$cat->term_id}"><?php echo "{$cat->name}"?></option>";
            <?php  } ?>
        </select>
    <?php } ?>

    </br>
    <h3>Description : <Br>
        <textarea name="content" cols="40" rows="3"></textarea></h3>
    <p>
        <input name="submit" type="submit" value="Отправить">
        <input nmame="clear" type="reset" value="Очистить"></p>
</form>