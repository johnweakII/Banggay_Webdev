<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
    <link rel="stylesheet" href="css/bootstrap/5.3.3/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
   
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary"
background="img/bg.jpg" 
style="background-size: cover; 
background-repeat: no-repeat;">
<h1 style="@import url('https://fonts.googleapis.com/css?family=Outfit:400'); 
 color: white;
 font-family: 'Outfit'; 
 font-size: 100px;
 text-align: center;
    position: absolute;
    inset-block-start: 20%;
    inset-inline-start: 50%;
    transform: translate(-50%,-50%);">CHOOSE AND WE WILL PROVIDE</h1>
    <div  class="container p-1 " style=" text-align: center;
    position: absolute;
    inset-block-start: 50%;
    inset-inline-start: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(245, 222, 179, 0.5); 
    width: 500px;

    ">
        <main class="form-signin w-50 m-auto">
            <form action="process_login.php" method="post" onsubmit="showLoading(event)">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="name@example.com" required>
                    <label for="userEmail">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" required>
                    <label for="userPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                       <b>Remember me</b> 
                    </label>
                </div>
                
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-body-secondary"><b>© (PASSION) 2024</b></p>
            </form>
        </main>
    </div>
    <script>
        function showLoading(event) {
            event.preventDefault(); // Prevent immediate form submission
            document.getElementById("loadingScreen").style.display = "block"; // Show loading spinner
        
            setTimeout(() => {
                event.target.submit(); // Submit the form after 3 seconds
            }, 3000); // 3-second delay
        
        }
    </script>
    <!-- Loading screen hidden by default -->
    <div id="loadingScreen" class="loading">
        <div class="spinner"></div> <!-- Rotating spinner -->
        Loading...
    </div>
    <script src="js/bootstrap/5.3.3/bootstrap.min.js"></script>
</body>
</html>