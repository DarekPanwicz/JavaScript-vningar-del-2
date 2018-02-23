<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="currencies.php" method="post">
    <label for="value">Kwota</label>
    <input type="text" id="value" value="" name="value">

    <select name="currency">
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="USD">USD</option>
        <option value="CHF">CHF</option>
    </select>
    <input type="submit" />
</form>
<?php if (!empty($_POST['response'])) :?>
    <input value="<?php $_POST['response'];?>" disabled>
<?php endif; ?>
</body>
</html>