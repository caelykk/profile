<form action="/api/profile.php" method="post" id="profile" class="profile" novalidate>
    <input
        type="hidden"
        name="csrf"
        id="csrf"
        value="<?= htmlspecialchars($csrf_token) ?>"
    >


     <fieldset class="profile__fieldset">
        <legend class="profile__legend">Контакты</legend>
        <!-- ======== E-MAIL ======== -->
         <div class="profile__item">
            <label for="email" class="profile__label">E-mail</label>
            <input type="email" name="email" id="email" class="profile__input">
            <div class="profile__error"></div>
        </div>
        <!-- ======================== -->
     </fieldset>

    <fieldset class="profile__fieldset">
        <legend class="profile__legend">Контакты</legend>
        <!-- ======== ФАМИЛИЯ ======== -->
         <div class="profile__item">
            <label for="lastName" class="profile__label">E-mail</label>
            <input type="text" name="lastName" id="lastName" class="profile__lastName">
            <div class="profile__error"></div>
        </div>
        <!-- ======================== -->
     </fieldset>
</form>