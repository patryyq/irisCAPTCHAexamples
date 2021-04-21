<?php
$status = file_get_contents("https://selene.hud.ac.uk/iris/irisCAPTCHA.php?private_key=[Your_Private_Key]&formID=" . $_POST['formID'] ?? FALSE);
if ($status) {
    // Your form proceeding code comes here
}
?>

<form>
    <input type="text">
    <input type="password">
    <!-- Decides about irisCAPTCHA location in the form -->
    <div id="irisCAPTCHA"></div>
    <button>Submit</button>
</form>


...
<script src="https://selene.hud.ac.uk/iris/irisCAPTCHA-JS.php?public_key=[Your_Public_Key]"></script>
</body>

</html>