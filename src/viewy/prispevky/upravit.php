<?php $data = json_decode($data, true); ?>
<h1>Upravit příspěvek</h1>
<?php echo "<form action='index.php?c=prispevky&a=upravit&id=" . $data["id"] . "' method='POST'><input type='text' name='nadpis' value='" . $data["nadpis"] . "'><textarea name='obsah'>" . $data["obsah"] . "</textarea><input type='submit' value='Potvrdit'/></form>"; ?>