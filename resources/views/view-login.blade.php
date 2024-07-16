<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi & Login Membership</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <style>
        body {
            background-color: #edada3;
            font-family: 'Arial', sans-serif;
        }

        .section {
            background-color: #ffc4da;
            /* Warna background latar belakang */
            min-height: 100vh;
            /* Set tinggi minimum sesuai tinggi layar */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            position: relative;
        }

        .title {
            color: #000;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .button.is-link {
            background-color: #ff69b4;
            color: #fff;
        }

        .button.is-danger {
            background-color: #ff1493;
            color: #fff;
        }

        .field:not(:last-child) {
            margin-bottom: 1.5rem;
        }

        .label {
            color: #000;
        }

        .input,
        .textarea,
        .select select {
            border-color: #000000;
            /* Warna border hitam */
        }

        .input:focus,
        .textarea:focus,
        .select select:focus {
            border-color: #ff1493;
            /* Warna border hitam saat fokus */
            box-shadow: 0 0 0 0.125em rgba(255, 105, 180, 0.25);
            /* Warna shadow pink */
        }

        .decoration {
            position: absolute;
            width: 50px;
            height: 50px;
        }

        .decoration.top-left {
            top: -25px;
            left: -25px;
        }

        .decoration.top-right {
            top: -25px;
            right: -25px;
        }

        .decoration.bottom-left {
            bottom: -25px;
            left: -25px;
        }

        .decoration.bottom-right {
            bottom: -25px;
            right: -25px;
        }

        .tab-container {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .tab {
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-bottom: 10px solid transparent;
        }

        .tab.active {
            border-bottom: 2px solid #ff69b4;
            font-weight: bold;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        .input-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab');
            const formSections = document.querySelectorAll('.form-section');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    formSections.forEach(fs => fs.classList.remove('active'));

                    tab.classList.add('active');
                    formSections[index].classList.add('active');
                });
            });

            // Set default active tab
            tabs[0].classList.add('active');
            formSections[0].classList.add('active');
        });

        function togglePasswordVisibility(event) {
            const passwordInput = event.target.previousElementSibling;
            const icon = event.target;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                icon.textContent = 'visibility';
            }
        }
    </script>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="form-container">
                        <div class="tab-container">
                            <div class="tab active">Registrasi</div>
                            <div class="tab">Login</div>
                        </div>
                        <div class="form-section active">
                            <h1 class="title">Registrasi Membership</h1>
                            <form action="#" method="POST">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input name="name" class="input" type="text" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">No Phone</label>
                                    <div class="control">
                                        <input name="no_phone" class="input" type="text" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input name="email" class="input" type="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Birthday</label>
                                    <div class="control">
                                        <input name="birthday" class="input" type="date" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Gender</label>
                                    <div class="control">
                                        <div class="select in-info">
                                            <select name="gender">
                                                <option>Select Gender</option>
                                                <option value="2">Man</option>
                                                <option value="1">Woman</option>
                                                <option value="0">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Married Status</label>
                                    <div class="control">
                                        <div class="select in-info">
                                            <select name="married_status">
                                                <option>Married</option>
                                                <option value="2">Unmarried</option>
                                                <option value="1">Married</option>
                                                <option value="0">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Address</label>
                                    <div class="control">
                                        <textarea name="address" class="textarea" placeholder="Enter your address" required></textarea>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Valid Status</label>
                                    <div class="control">
                                        <div class="select in-info">
                                            <select name="valid_status">
                                                <option>Status Valid</option>
                                                <option value="1">Valid</option>
                                                <option value="0">Invalid</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Point</label>
                                    <div class="control">
                                        <input name="point" class="input" type="number" placeholder="Enter points" required>
                                    </div>
                                </div>
                                <div class="field is-grouped is-grouped-centered">
                                    <div class="control">
                                        <button class="button is-dark">Daftar</button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-link">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-section">
                            <h1 class="title">Login Membership</h1>
                            <form action="#" method="POST">
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input name="email" class="input" type="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Password</label>
                                    <div class="control input-wrapper">
                                        <input name="password" class="input" type="password" placeholder="Enter your password" required>
                                        <span class="material-icons toggle-password" onclick="togglePasswordVisibility(event)">visibility</span>
                                    </div>
                                </div>
                                <div class="field is-grouped is-grouped-centered">
                                    <div class="control">
                                        <button class="button is-dark">Login</button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-link">Batal</button>
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