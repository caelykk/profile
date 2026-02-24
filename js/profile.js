export  function myValidation() {

    const form = document.getElementById('profile');


    const saveBtn = document.getElementById('saveBtn');
    const birtdate = document.getElementsByClassName('profile__birthdate');

    form.addEventListener('submit', async e => {
        e.preventDefault();

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
            });
            const data = await response.json();

            console.log(data);
        } finally {
            saveBtn.disabled = false
            saveBtn.classList.remove('g-button--loading')
        }
    });

};