<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/registration.css" />
        <title>Sign Up</title>
    </head>
    <body>
        <div class="logo__container">
            <img class="logo" src="/assets/JRU-Logo.png" alt="" />
        </div>

        <header class="header">
            <h1 class="header__name">Be Rizalian!</h1>
        </header>

        <div class="image__container">
            <img class="jru-bg" src="/assets/JRU-BG.jpg" alt="" />
        </div>

        <main class="viewport">
            <section class="form__container">
                <form action="action=" id="form__signup">
                    <h1 class="form__greetings">Join Us!</h1>
                    <div class="form__fullname">
                        <div class="form__firstname">
                            <label for="fname">First Name:</label>
                            <input
                                type="text"
                                id="fname"
                                name="fname"
                                placeholder="Enter your first name"
                            />
                            <span class="error"></span>
                        </div>

                        <div class="form__lastname">
                            <label for="lname">Last Name:</label>
                            <input
                                type="text"
                                id="lname"
                                name="lname"
                                placeholder="Enter your last name"
                            />
                            <span class="error"></span>
                        </div>
                    </div>

                    <div class="form__email">
                        <label for="email">Email Address:</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="username@gmail.com"
                        />
                        <span class="error"></span>
                    </div>

                    <div class="form__phonenumber">
                        <label for="phone-number">Phone Number:</label>
                        <input
                            type="number"
                            id="phone-number"
                            name="phone-number"
                            placeholder="+000 000 000"
                        />
                        <span class="error"></span>
                    </div>

                    <div class="form__password">
                        <label class="password" for="password"
                            >Password:
                        </label>
                        <input
                            type="text"
                            name="password"
                            id="password"
                            placeholder="Atleast 8 characters (mix alphabetical & numbers)"
                        />
                    </div>

                    <div class="form__confirm">
                        <label class="password" for="password"
                            >Confirm Password:
                        </label>
                        <input
                            type="text"
                            name="confirm-password"
                            id="confirm-password"
                            placeholder="Confirm your password"
                        />
                    </div>

                    <div class="form__checkbox">
                        <input
                            type="checkbox"
                            name="consent"
                            id="form__checkbox-consent"
                        />
                        <label class="consent" for="consent"
                            >I agree to the Terms & Conditions.
                        </label>
                    </div>

                    <div class="form__signup">
                        <a class="signup" href="/registration">Sign Up</a>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
