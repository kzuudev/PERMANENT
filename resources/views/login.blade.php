<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>
        <link rel="stylesheet" href="/css/login.css" />
    </head>
    <body>
        <div class="logo__container">
            <img class="logo" src="/assets/JRU-Logo.png" alt="" />
        </div>

        <header class="header">
            <h1 class="header__name">Jose Rizal University</h1>
            <p class="header__system">Lost & Found Management System</p>
        </header>

        <div class="image__container">
            <img class="jru-bg" src="/assets/jru.jpg" alt="" />
        </div>

        <main class="viewport">
            <section class="form__container">
                <form action="" id="form__login" method="POST">
                @csrf
                    <h1 class="form__greetings">Hello, Rizalian!</h1>
                    <div class="form__email">
                        <label class="email" for="email">Email: </label>
                        <input type="text" name="email" id="email" />
                    </div>

                    <div class="form__password">
                        <label class="password" for="password"
                            >Password:
                        </label>
                        <input type="text" name="password" id="password" />
                    </div>

                    <div class="form__auth-options">
                        <div class="form__checkbox">
                            <input
                                type="checkbox"
                                name="remember"
                                id="form__checkbox-remember"
                            />
                            <label class="remember" for="remember"
                                >Remember me</label
                            >
                        </div>

                        <div class="form__forgot-password">
                            <a id="forgot__password" href="#">
                                Forgot password
                            </a>
                        </div>
                    </div>

                    <div class="form__buttons">
                        <div class="form__login">
                            <button name="submit" class="login">Login</button>
                        </div>

                        <div class="form__signup">
                            <a class="signup"  href="/registration">Sign Up</a>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
