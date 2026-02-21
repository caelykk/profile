<form action="/api/profile.php" method="post" id="profileForm" class="profileForm" novalidate>
    <input
        type="hidden"
        name="csrf"
        id="csrf"
        value="<?= htmlspecialchars($csrf_token) ?>"
    >

    <!-- E-MAIL -->
     <fieldset>
        <legend>Контакты</legend>
        <label for="email"></label>
        <input type="email" name="email" id="email" class="profileForm__">
     </fieldset>
</form>