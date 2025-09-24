document.addEventListener("DOMContentLoaded", function() {
    // Переменные для селекторов
    var signInLink = document.querySelector('.switch-to-signin');
    var signUpLink = document.querySelector('.switch-to-signup');
    var formsContainer = document.querySelector('.modal__body'); // Родительский контейнер обоих форм

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
});
