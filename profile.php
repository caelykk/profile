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
            <div class="profile__item-field">
                <input type="email"
                    name="email"
                    id="email"
                    class="profile__input"
                    aria-describedby="email-error"
                >
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </div>
            <div class="profile__error"></div>
        </div>
        <!-- ======================== -->

        <!-- ======== ТЕЛЕФОНЫ ======== -->
         <div class="profile__phones">
            <div class="profile__item profile__item--primary-phone">
                <label for="primaryPhone" class="profile__label">Номер телефона</label>
                <div class="profile__field">
                    <input type="tel"
                        id="primaryPhone"
                        name="primaryPhone"
                        class="profile__input"
                        aria-describedby="primaryPhoneError"
                        required
                    >
                    <span class="profile__icon" aria-hidden="true">
                        <!-- SVG -->
                    </span>
                </div>
                <div id="primaryPhoneError" class="profile__error" aria-live="polite"></div>
            </div>

            <div class="profile__item profile__item--secondary-phone">
                <label for="secondaryPhone" class="profile__label">Дополнительный номер</label>
                <div class="profile__field">
                    <input type="tel"
                        id="secondaryPhone"
                        name="secondaryPhone"
                        class="profile__input"
                        aria-describedby="secondaryPhoneError"
                    >
                    <span class="profile__icon" aria-hidden="true">
                        <!-- SVG -->
                    </span>
                </div>
                <div id="secondaryPhoneError" class="profile__error" aria-live="polite"></div>
            </div>
        </div>
        <!-- ======================== -->
     </fieldset>

    <fieldset class="profile__fieldset">
        <legend class="profile__legend">Персональные данные</legend>
        <!-- ======== ФАМИЛИЯ ======== -->
         <div class="profile__item">
            <label for="lastName" class="profile__label">Фамилия</label>
            <input type="text" name="lastName" id="lastName" class="profile__lastName">
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            <div class="profile__error"></div>
        </div>
        <!-- ======================== -->
     </fieldset>
</form>