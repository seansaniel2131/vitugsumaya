document.addEventListener("DOMContentLoaded", function() {
    console.log("DOMContentLoaded event fired");
    
    const form = document.getElementById("loginForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        console.log("Form submitted");

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        
        console.log("Username:", username);
        console.log("Password:", password);

        const url = './Script/authenticate.php';
        const data = { username: username, password: password };
        
        console.log("Sending data to server:", data);

        fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(userData => {
            console.log("Response from server:", userData);

if (userData && userData.BranchID) {
    const branchId = parseInt(userData.BranchID, 10); // Parse BranchID as integer
    
    switch (branchId) {
        case 1:
            console.log("Redirecting to primary.php");
            window.location.href = 'primary.php';
            break;
        case 2:
            console.log("Redirecting to aoc.php");
            window.location.href = 'aoc.php';
            break;
        case 3:
            console.log("Redirecting to quezon.php");
            window.location.href = 'quezon.php';
            break;
        default:
            console.log("Redirecting to default.php");
            // Redirect to a default page when branchID doesn't match any case
            window.location.href = 'default.php';
    }
} else {
    console.log("Invalid credentials");
    alert("Wrong credentials. Please check your username and password.");
}

        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
