const formEdit = document.querySelector('form.form-edit');

formEdit.addEventListener('submit', function (event){
    event.preventDefault();



    if(window.confirm('Do you want EDIT that animal with that generality ?') === true){
        this.submit();
    }
})
