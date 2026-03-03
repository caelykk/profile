
<?php require_once 'api/profile.php'; ?>

<form action="/api/profile.php" method="post" id="profile" class="profile" novalidate>
     <fieldset class="profile__fieldset">
        <legend class="profile__legend">Контакты</legend>
        <!-- ======== E-MAIL ======== -->
        <div class="profile__item">
            <label for="email" class="profile__label">E-mail<span>*</span></label>

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
            <div id="emailError" class="profile__error" aria-live="polite">
                <?php
                    //htmlspecialchars($errors['email']);
                ?>
            </div>
        </div>
        <!-- ======================== -->

        <!-- ======== ТЕЛЕФОНЫ ======== -->
         <div class="profile__phones">
            <div class="profile__item profile__item--phone">
                <label for="phone" class="profile__label">Номер телефона<span>*</span></label>

                <div class="profile__field">
                    <input type="tel"
                        id="phone"
                        name="phone"
                        class="profile__input"
                        aria-describedby="phoneError"
                        required
                    >
                    <span class="profile__icon" aria-hidden="true">
                        <!-- SVG -->
                    </span>
                </div>
                <div id="phoneError" class="profile__error" aria-live="polite"></div>
            </div>

            <div class="profile__item profile__item--second-phone">
                <label for="secondPhone" class="profile__label">Дополнительный номер</label>
                <div class="profile__field">
                    <input type="tel"
                        id="secondPhone"
                        name="secondPhone"
                        class="profile__input"
                        aria-describedby="secondPhoneError"
                    >
                    <span class="profile__icon" aria-hidden="true">
                        <!-- SVG -->
                    </span>
                </div>
                <div id="secondPhoneError" class="profile__error" aria-live="polite"></div>
            </div>
        </div>
        <!-- ======================== -->
     </fieldset>

    <fieldset class="profile__fieldset">
        <legend class="profile__legend">Персональные данные</legend>

        <!-- ======== ФАМИЛИЯ ======== -->
        <div class="profile__item">
            <label for="lastName" class="profile__label">Фамилия<span>*</span></label>

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
            <label for="name" class="profile__label">Имя<span>*</span></label>

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
            <label class="profile__label">Дата Рождения</label>
            <div class="profile__birthdate">
                <div class="profile__field">
                    <select name="birthDay"
                        id="birthDay"
                        class="profile__input"
                        aria-describedby="birthdateError"
                    >
                    <option value="">День</option>
                    <option value="1">1</option>

                    </select>
                    <span class="profile__icon" aria-hidden="true">
                        <!-- svg -->
                    </span>
                </div>
                <div class="profile__field">
                    <select name="birthMonth"
                        id="birthMonth"
                        class="profile__input"
                        aria-describedby="birthdateError"
                    >
                    <option value="">Месяц</option>
                    <option value="1">Январь</option>
                    </select>
                    <span class="profile__icon" aria-hidden="true">
                        <!-- svg -->
                    </span>
                </div>
                <div class="profile__field">
                    <select name="birthYear"
                        id="birthYear"
                        class="profile__input"
                        aria-describedby="birthdateError"
                    >
                    <option value="">Год</option>
                    <option value="1992">1992</option>

                    </select>
                    <span class="profile__icon" aria-hidden="true">
                        <!-- svg -->
                    </span>
                </div>
            </div>
            <div id="birthdateError" class="profile__error" aria-live="polite"></div>
        </div>
        <!-- ======================== -->

        <!-- Пол -->
        <div class="profile__item profile__item--gender">
            <span class="profile__label">
                Пол
            </span>

            <div class="profile__gender">
                <label class="profile__gender-option">
                    <input
                        type="radio"
                        name="gender"
                        value="M"
                        class="profile__gender-input"
                        aria-describedby="genderError"
                    >
                    <span class="profile__gender-button">
                        Мужской
                        <span class="profile__gender-icon" aria-hidden="true">
                            <!-- svg -->
                        </span>
                    </span>
                </label>

                <label class="profile__gender-option">
                    <input
                        type="radio"
                        name="gender"
                        value="F"
                        class="profile__gender-input"
                        aria-describedby="genderError"
                    >
                    <span class="profile__gender-button">
                        Женский
                        <span class="profile__gender-icon" aria-hidden="true">
                            <!-- svg -->
                        </span>
                    </span>
                </label>
            </div>

            <div id="genderError" class="profile__error" aria-live="polite"></div>
        </div>

    </fieldset>
    <!-- Кнопка "Сохранить" -->
    <button type="submit" id="saveBtn" name="saveBtn" class="g-button g-button--red profile__submit">
        Сохранить изменения
    </button>
</form>