const form = document.getElementById("form")
const inputs = form.querySelectorAll(".form__input")
const submitButton = document.getElementById("submit-btn")
const formMessage = document.getElementById("form-message");

form.addEventListener("submit", handleFormSubmit)
inputs.forEach((input)=>{
    input.addEventListener("blur", () => validateInput(input))
})

function handleFormSubmit(event) {
    event.preventDefault();

    let isValid = true;

    inputs.forEach((input)=>{
        if (!validateInput(input)){
            isValid = false
        }
    })

    if (isValid) {
        submitButton.classList.add("valid-animation");
        setTimeout(() => {
            submitButton.classList.remove("valid-animation");
        }, 1000);

        const data = {
            name: document.querySelector("input[name='name']").value.trim(),
            email: document.querySelector("input[name='email']").value.trim(),
            phone: document.querySelector("input[name='phone']").value.trim(),
            telegram: document.querySelector("input[name='telegram']").value,
            amount: document.querySelector("input[name='amount']").value
        };
        sendToServer(data);
    } else {
        showFormMessage("Please fill in all fields correctly.", "error");
    }

};

function validateInput(input) {
    const value = input.value.trim();
    const name = input.name;
    let isValid = true;
    let errorMessage = "";

    switch (name) {
        case "name":
            if (!value) {
                isValid = false;
                errorMessage = "Name is required.";
            }
            break;
        case "email":
            if (!value) {
                isValid = false;
                errorMessage = "Email is required.";
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                isValid = false;
                errorMessage = "Invalid email.";
            }
            break;
        case "phone":
            if (!value) {
                isValid = false;
                errorMessage = "Phone is required."
            } else if (!/^[0-9-+()]{10,20}$/.test(value)) {
                isValid = false;
                errorMessage = "Invalid phone number.";
            }
            break;
    }

    const errorElement = document.getElementById(`${name}-error`);
    
    if (errorElement) {
        if (isValid) {
            input.classList.remove("invalid");
            input.classList.add("valid");
            errorElement.style.display = "none";
        } else {
            input.classList.remove("valid");
            input.classList.add("invalid");
            errorElement.textContent = errorMessage;
            errorElement.style.display = "block";
        }
    }

    return isValid;
}

function showFormMessage(message, type) {
    formMessage.textContent = message;
    formMessage.className = `form__message form__message--${type}`;
    formMessage.style.display = "block";
}

function sendToServer(data) {
    const url = `https://astor-bank-backend.onrender.com/send-message`;

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.ok) {
            showFormMessage("Request sent successfully!", "success");
            console.log("Request sent successfully!");
        } else {
            showFormMessage("Error sending request.", "error");
            console.error("Error sending request.")
        }
    })
    .catch(error => {
        showFormMessage("Error sending request.", "error");
        console.error('Error sending request:', error);
    });
}