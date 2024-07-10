<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Membership</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #edada3;
            font-family: 'Arial', sans-serif;
        }
        .registration-form {
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
        .input, .textarea, .select select {
    border-color: #000000; /* Warna border hitam */
}

.input:focus, .textarea:focus, .select select:focus {
    border-color: #ff1493; /* Warna border hitam saat fokus */
    box-shadow: 0 0 0 0.125em rgba(255, 105, 180, 0.25); /* Warna shadow pink */
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
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="registration-form">
                        <img src="/mnt/data/Coquette__-removebg-preview.png" class="decoration top-left">
                        <img src="/mnt/data/Coquette__-removebg-preview.png" class="decoration top-right">
                        <img src="/mnt/data/Coquette__-removebg-preview.png" class="decoration bottom-left">
                        <img src="/mnt/data/Coquette__-removebg-preview.png" class="decoration bottom-right">
                        <h1 class="title">Registrasi Membership</h1>
                        <form action="#" method="POST">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Phone</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input" type="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Birthday</label>
                                <div class="control">
                                    <input class="input" type="date" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select">
                                        <select required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="male">Man</option>
                                            <option value="female">Woman</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Married Status</label>
                                <div class="control">
                                    <div class="select">
                                        <select required>
                                            <option value="" disabled selected>Select Married Status</option>
                                            <option value="single">Unmarried</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widower/Widow</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Address</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Enter your address" required></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Valid Status</label>
                                <div class="control">
                                    <div class="select">
                                        <select required>
                                            <option value="" disabled selected>Select Status Valid</option>
                                            <option value="valid">Valid</option>
                                            <option value="invalid">Invalid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Poin</label>
                                <div class="control">
                                    <input class="input" type="number" placeholder="Enter points" required>
                                </div>
                            </div>
                            <div class="field is-grouped is-grouped-centered">
                                <div class="control">
                                    <button class="button is-link">Daftar</button>
                                </div>
                                <div class="control">
                                    <button class="button is-danger">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
