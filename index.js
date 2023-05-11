window.addEventListener('load', () => {
    console.log("DOM loaded");

    const dropdownHeaders = document.querySelectorAll(".service-dropdown-header-container");

    // Add an event listener to each header
    dropdownHeaders.forEach(header => {
        header.addEventListener("click", () => {
            // Find the associated dropdown body
            const dropdownBody = header.parentNode.querySelector('.service-dropdown-body');
            // Toggle a class on the body
            dropdownBody.classList.toggle("open");
        });
    });

    document.getElementById("subscribe-form").addEventListener("submit", function (event) {
        event.preventDefault();
        const emailInput = document.getElementById("email-input-main");
        console.log(emailInput.value);
        console.log(emailInput);
        const email = emailInput.value;
        const submitButton = document.getElementById("subscribe-button");

        if (email) {
            submitButton.classList.add("subscribe-button-loading");
            // AJAX request to save the email address
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "/wp/wp-admin/admin-ajax.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    const response = JSON.parse(this.responseText);
                    submitButton.classList.remove("subscribe-button-loading");
                    if (response.success) {
                        // Change the button color to green and disable it
                        submitButton.style.backgroundColor = "#040268";
                        submitButton.style.color = "white";
                        submitButton.innerHTML = "Subscribed!";
                        submitButton.disabled = true;
                    } else if (response.error) {
                        // Display the error message
                        alert(response.error);
                    }
                    else {
                        // Display the error message
                        alert("That e-mail has already been registered.");
                    }
                }
            };
            xhttp.send(`action=save_email_subscription&email=${encodeURIComponent(email)}`);
        }
    });
});

function setMinHeight() {
    const textContainer = document.querySelector('.who-we-are-card');
    const imageContainer = document.querySelector('.who-we-are-image');

    if (textContainer && imageContainer) {
        const textContainerHeight = textContainer.offsetHeight;
        imageContainer.style.minHeight = `${textContainerHeight}px`;
    }
}

// Call the function initially to set the min-height
setMinHeight();

// Call the function when the window is resized
window.addEventListener('resize', setMinHeight);
