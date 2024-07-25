const formCreate = document.querySelector('form.form-create');

formCreate.addEventListener('submit', function (event){
    event.preventDefault();



    if(window.confirm('Do you want CREATE that animal with that generality ?') === true){
        this.submit();
    }
})
