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
            <span>*</span>
            <div class="profile__field">
                <input type="email"
                    name="email"
                    id="email"
                    class="profile__input"
                    aria-describedby="emailError"
                    required
                >
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </div>
            <div id="emailError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

        <!-- ======== ТЕЛЕФОНЫ ======== -->
         <div class="profile__phones">
            <div class="profile__item profile__item--primary-phone">
                <label for="primaryPhone" class="profile__label">Номер телефона</label>
                <span>*</span>
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
            <span>*</span>
            <div class="profile__field">
                <input type="text"
                    name="lastName"
                    id="lastName"
                    class="profile__input"
                    aria-describedby="lastNameError"
                    required
                >
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </div>
            <div id="lastNameError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

        <!-- ======== ИМЯ ======== -->
        <div class="profile__item">
            <label for="name" class="profile__label">Имя</label>
            <span>*</span>
            <div class="profile__field">
                <input type="text"
                    name="name"
                    id="name"
                    class="profile__input"
                    aria-describedby="nameError"
                    required
                >
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </div>
            <div id="nameError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

        <!-- ======== ОТЧЕСТВО ======== -->
        <div class="profile__item">
            <label for="secondName" class="profile__label">Отчество</label>
            <div class="profile__field">
                <input type="text"
                    name="secondName"
                    id="secondName"
                    class="profile__input"
                    aria-describedby="secondNameError"
                >
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </div>
            <div id="secondNameError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

        <!-- ======== ДАТА РОЖДЕНИЯ ======== -->
        <div class="profile__item">
            <label for="birthdate" class="profile__label">Дата Рождения</label>
            <span class="profile__field">
                <select type="text"
                    name="birthdateDay"
                    id="birthdateDay"
                    class="profile__input"
                >
                </select>
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </span>
            <span class="profile__field">
                <select type="text"
                    name="birthdateMonth"
                    id="birthdateMonth"
                    class="profile__input"
                >
                </select>
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </span>
            <span class="profile__field">
                <select type="text"
                    name="birthdateYear"
                    id="birthdateYear"
                    class="profile__input"
                >
                </select>
                <span class="profile__icon" aria-hidden="true">
                    <!-- svg -->
                </span>
            </span>
            <div id="birthdateError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

     </fieldset>
</form>