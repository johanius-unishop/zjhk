const modals = document.querySelectorAll("[data-modal]");

    const modalCallBtns = document.querySelectorAll("[data-modal-link]");

    const body = document.body;

    // Пароли для входа
    const passwordLogin = document.getElementById("input-password-login");
    const toggleButtonLogin = document.getElementById("toggle-password-login");
    const visibleEyeLogin = toggleButtonLogin.querySelector(".visible-icon");
    const hiddenEyeLogin = toggleButtonLogin.querySelector(".hidden-icon");

    checkPasswordState(passwordLogin, toggleButtonLogin);

    // Пароли для регистрации
    const passwordReg = document.getElementById("input-password-reg");
    const toggleButtonReg = document.getElementById("toggle-password-reg");
    const visibleEyeReg = toggleButtonReg.querySelector(".visible-icon");
    const hiddenEyeReg = toggleButtonReg.querySelector(".hidden-icon");

    checkPasswordState(passwordReg, toggleButtonReg);

    // Пароли для регистрации (подтверждение пароля)
    const passwordRegConf = document.getElementById(
        "input-password-reg-confirmation"
    );
    const toggleButtonRegConf = document.getElementById(
        "toggle-password-reg-confirmation"
    );
    const visibleEyeRegConf =
        toggleButtonRegConf.querySelector(".visible-icon");
    const hiddenEyeRegConf = toggleButtonRegConf.querySelector(".hidden-icon");

    checkPasswordState(passwordRegConf, toggleButtonRegConf);

    // Обработчик для входа
    passwordLogin.addEventListener("input", function () {
        if (passwordLogin.value.length > 0) {
            toggleButtonLogin.classList.add("_active");
        } else {
            toggleButtonLogin.classList.remove("_active");
        }
    });

    toggleButtonLogin.addEventListener("click", function () {
        const isPasswordType = passwordLogin.type === "password";
        passwordLogin.type = isPasswordType ? "text" : "password";
        visibleEyeLogin.style.display = isPasswordType
            ? "none"
            : "inline-block";
        hiddenEyeLogin.style.display = !isPasswordType
            ? "none"
            : "inline-block";
    });

    // Обработчик для регистрации
    passwordReg.addEventListener("input", function () {
        if (passwordReg.value.length > 0) {
            toggleButtonReg.classList.add("_active");
        } else {
            toggleButtonReg.classList.remove("_active");
        }
    });

    toggleButtonReg.addEventListener("click", function () {
        const isPasswordType = passwordReg.type === "password";
        passwordReg.type = isPasswordType ? "text" : "password";
        visibleEyeReg.style.display = isPasswordType ? "none" : "inline-block";
        hiddenEyeReg.style.display = !isPasswordType ? "none" : "inline-block";
    });



    // Обработчик для регистрации повтор пароля
    passwordRegConf.addEventListener("input", function () {
        if (passwordRegConf.value.length > 0) {
            toggleButtonRegConf.classList.add("_active");
        } else {
            toggleButtonRegConf.classList.remove("_active");
        }
    });

    toggleButtonRegConf.addEventListener("click", function () {
        const isPasswordType = passwordRegConf.type === "password";
        passwordRegConf.type = isPasswordType ? "text" : "password";
        visibleEyeRegConf.style.display = isPasswordType
            ? "none"
            : "inline-block";
        hiddenEyeRegConf.style.display = !isPasswordType
            ? "none"
            : "inline-block";
    });

    // Вспомогательная функция для проверки состояния поля
    function checkPasswordState(inputField, buttonToggle) {
        if (inputField.value.trim().length > 0) {
            buttonToggle.classList.add("_active");
        } else {
            buttonToggle.classList.remove("_active");
        }
    }

    const getScrollbarWidth = () => {
        return window.innerWidth - document.documentElement.clientWidth;
    };

    const setBodyStyle = () => {
        const scrollbarWidth = getScrollbarWidth();
        body.style.overflowY = "hidden";
        body.style.position = "fixed";
        body.style.top = `-${scrollPosition}px`;
        body.style.width = "100%";
        body.style.paddingRight = `${scrollbarWidth}px`;
    };

    const setBodyStyleDefault = () => {
        body.style.overflowY = "auto";
        body.style.position = "";
        body.style.top = "";
        body.style.width = "";
        body.style.paddingRight = "0";
    };

    let scrollPosition = 0;

    const openModal = (modal) => {
        if (!modal.classList.contains("_open")) {
            scrollPosition =
                window.scrollY || document.documentElement.scrollTop;
            setBodyStyle();
            modal.classList.add("_open");
        }
    };

    const closeModal = (modal) => {
        modal.classList.remove("_open");
        setBodyStyleDefault();
        window.scrollTo(0, scrollPosition);
    };

    const signInLink = document.querySelector('.switch-to-signin');
    const signUpLink = document.querySelector('.switch-to-signup');
    const formsContainer = document.querySelector('.modal__body'); // Родительский контейнер обоих форм

    // Переключение на форму регистрации
    signUpLink.addEventListener('click', function(event) {
        event.preventDefault();
        formsContainer.querySelector('.form-signin').style.display = 'none'; // Прячем форму входа
        formsContainer.querySelector('.form-signup').style.display = 'block'; // Показываем форму регистрации
    });

    // Переключение обратно на форму входа
    signInLink.addEventListener('click', function(event) {
        event.preventDefault();
        formsContainer.querySelector('.form-signin').style.display = 'block'; // Показываем форму входа
        formsContainer.querySelector('.form-signup').style.display = 'none'; // Прячем форму регистрации
    });



    if (modals.length > 0) {
        modalCallBtns.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                const modalName = btn.dataset.modalLink;
                const targetModal = document.querySelector(
                    `[data-modal="${modalName}"]`
                );
                if (targetModal) {
                    openModal(targetModal);
                } else {
                    console.error(
                        `Модальное окно с data-modal="${modalName}" не найдено!`
                    );
                }
            });
        });

        modals.forEach((modalWindow) => {
            modalWindow.addEventListener("click", (e) => {
                if (e.target.dataset.close) {
                    closeModal(modalWindow);
                }
            });
        });
    }
    console.log("Modal is ready...");
