const submitBtn = document.querySelector("#submit-btn");
const passwordInput = document.querySelector("#password");
const passwordConfirmInput = document.querySelector("#passwordConfirm");

submitBtn.addEventListener("click", () => {
    let passwordValue = passwordInput.value;
    let passwordConfirmValue = passwordConfirmInput.value;
    if(passwordValue != passwordConfirmValue){
        alert("A senha confirmada não é igual a primeira.")
    }
});