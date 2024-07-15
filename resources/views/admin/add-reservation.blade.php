<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                <form action="{{ url('save-reservation') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">reservation</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">date</label>
                                <div class="control">
                                    <input name="date" type="date" class="input is-link" placeholder="date" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">age</label>
                                <div class="control">
                                    <input name="age" type="number" class="input is-link" placeholder="age" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">gender</label>
                                <div class="control">
                                    <div class="select in-info">
                                        <select name="gender">
                                            <option>--select Gender--</option>
                                            <option value="2">other</option>
                                            <option value="1">man</option>
                                            <option value="0">woman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">treatment</label>
                                <div class="control">
                                    <input name="treatment_id" type="number" class="reservation" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">file</label>
                                <div class="control">
                                    <input name="file_upload" type="file" class="reservation" />
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Tambah</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('view-reservation') }}" class="button is-link">Batal</a>
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