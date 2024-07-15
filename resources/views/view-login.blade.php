<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        .image-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .image-wrapper img {
            max-width: 100%;
            max-height: 100%;
        }

        .registration-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .login-form {
            padding: 2rem;
        }
    </style>
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <!-- Left Column with Image and Registration Button -->
                    <div class="column is-half">
                        <div>
                            <figure class="image is-4by3">
                                <img src="https://www.portalindonesiaperkasa.com/wp-content/uploads/2021/10/Enscape_2021-02-04-19-48-43-1024x576.jpg" alt="Image">
                                <div class="has-text-centered registration-button">
                                    <p>Belum Punya Akun?</p>
                                    <a href="#" class="button is-primary">Registration</a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Right Column with Login Form -->
                    <div class="column is-half">
                        <div class="login-form">
                            <h1 class="title has-text-centered">Login</h1>
                            <form action="#" method="POST">
                                <div class="field">
                                    <label for="username" class="label">Username</label>
                                    <div class="control">
                                        <input id="username" name="username" type="text" class="input" placeholder="Enter your username" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input id="password" name="password" type="password" class="input" placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-fullwidth is-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>