<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    background: #f8fafc;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    line-height: 1.6;
    color: #334155;
}
.login-container {
    width: 100%;
    max-width: 400px;
}
.login-card {
    background: white;
    border-radius: 12px;
    padding: 32px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.login-header {
    text-align: center;
    margin-bottom: 32px;
}

.login-header h2 {
    font-size: 1.875rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 8px;
}

.login-header p {
    color: #64748b;
    font-size: 0.875rem;
}

/* Form Styles */
.form-group {
    margin-bottom: 20px;
}
.input-wrapper {
    position: relative;
    display: flex;
    flex-direction: column;
}
.input-wrapper input {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    padding: 12px 16px 8px 16px;
    color: #1e293b;
    font-size: 16px;
    transition: all 0.2s ease;
    width: 100%;
    outline: none;
}
/*Password*/
.password-wrapper {
    position: relative;
}
.password-wrapper input {
    padding-right: 48px;
}
/* Button */
.login-btn {
    width: 100%;
    background: #6366f1;
    border: none;
    border-radius: 8px;
    padding: 12px 24px;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
    margin-bottom: 24px;
}
.login-btn:hover {
    background: #4f46e5;
}
</style>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Log In</h2>
                <p>Enter your credentials to access your account</p>
            </div>
            <form class="login-form" id="loginForm" action="form_action.php" method="post">
                <div class="form-group">
                    <div class="input-wrapper">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required >  
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Log In</span>
                </button>
            </form>
        </div>
    </div>

</body>
</html>