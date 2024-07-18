<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Membership</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <style>
        body {
            font-family: "Arial", sans-serif;
        }

        main {
            flex: 1;
            padding-left: 240px;
        }

        .card-content {
            font-family: "Roboto", sans-serif;
        }

        .card-header {
            background-color: #edada3;
        }

        .input.is-link {
            border-color: #fdb0c0;
        }

        .textarea.is-link {
            border-color: #fdb0c0;
        }

        .select.is-info select {
            border-color: #fdb0c0;
        }
    </style>

</head>

<body>
    @include('admin.navigation')
    @include('admin.header')
    <main>
        @include('admin.floating')
        <section class="section">
            <div class="container">
                <form action="{{ url('save-membership') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Add Membership</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Enter Your Name" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">No Phone</label>
                                <div class="control">
                                    <input name="no_phone" type="text" class="input is-link" placeholder="Enter Your Phone Number" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input name="email" type="text" class="input is-link" placeholder="Enter Your Email"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Birthday</label>
                                <div class="control">
                                    <input name="birthday" type="date" class="input is-link" required>
                                </div>
                            </div>
                        

                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="gender">
                                            <option>--Select Gender--</option>
                                            <option value="2">Other</option>
                                            <option value="1">Man</option>
                                            <option value="0">Woman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Married Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="married_status">
                                            <option>--Select Married Status--</option>
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
                                    <textarea name="address" class="textarea is-link" placeholder="Enter Your Address"></textarea>
                                </div>
                            </div>


                            <div class="field">
                                <label class="label">Valid Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="valid_status">
                                            <option>--Select Status Valid--</option>
                                            <option value="1">Valid</option>
                                            <option value="0">Invalid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Point</label>
                                <div class="control">
                                    <input name="point" class="input is-link" type="number" placeholder="Enter Points" required>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Add</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('view-membership') }}" class="button is-link">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    @include('admin.footer')
</body>

</html>