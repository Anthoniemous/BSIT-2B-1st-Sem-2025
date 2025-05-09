document.addEventListener("DOMContentLoaded", function(){
    const inputs = document.querySelectorAll(".code-form-outline input");

    inputs.forEach((input, index) => {
        input.addEventListener("input", function(){
            if(this.value.length === 1 && index < inputs.length - 1){
                inputs[index+1].focus();
            }
        });

        input.addEventListener("keydown", function(event){
            if(event.key === "Backspace" && this.value.length === 0 && index > 0){
                inputs[index-1].focus();
            }
        });

        input.addEventListener("paste", function(event){
            event.preventDefault();
            let pastedData = event.clipboardData.getData("text").trim().replace(/\D/g, "");

            if(pastedData.length === input.length){
                inputs.forEach((inp, i) => {
                    inp.value = pastedData[i] || "";
                });
                inputs[inputs.length - 1].focus();
            }
        });
    });
});