    document.querySelector(".login-form").addEventListener("submit", (e) => {
        e.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if(username === "admin" && password === "password") {
            alert("Logged in successfully");
            // Redirect to another page, e.g., window.location.href = "/home";
        } else {
            alert("Invalid username or password");
        }
    });
