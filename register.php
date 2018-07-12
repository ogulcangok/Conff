<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 9.07.2018
 * Time: 12:05
 */

?>

<form action="" method="post">

    Email: <br>
    <input type="text" name="title"> <br> <br>

    Name: <br>
    <input type="text" name="title"> <br> <br>

    Surname: <br>
    <textarea name="content" cols="30" rows="10"></textarea> <br>

    Password: <br>
    <input type="text" name="title"> <br> <br>

    Confirm Password: <br>
    <input type="text" name="title"> <br> <br>

    Name: <br>
    <input type="text" name="title"> <br> <br>

    Categories: <br>
    <select name="category_id[]" multiple size="5">
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
        <?php endforeach; ?>
    </select> <br> <br>

    Onay: <br>
    <select name="onay">
        <option value="1">Approved</option>
        <option value="0">Declined</option>
    </select> <br> <br>

    <input type="hidden" name="submit" value="1">
    <button type="submit">Submit</button>
</form>