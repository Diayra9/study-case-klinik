<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Membership</title>
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
                <form id="membershipForm" action="{{ url('update-membership/' . $membership->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Membership</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Enter Your Name" value="{{ $membership->name}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">No Phone</label>
                                <div class="control">
                                    <input name="no_phone" type="text" class="input is-link" placeholder="Enter Your Phone Number" value="{{ $membership->no_phone}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input name="email" type="text" class="input is-link" placeholder="Enter Your Email" value="{{ $membership->email}}"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Birthday</label>
                                <div class="control">
                                    <input name="birthday" type="date" class="input is-link" value="{{ $membership->birthday}}" />
                                </div>
                            </div>
                        

                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="gender">
                                            <option>--Select Gender--</option>
                                            <option value="2" @if($membership->gender == 2) selected @endif>Other</option>
                                            <option value="1" @if($membership->gender == 1) selected @endif>Man</option>
                                            <option value="0" @if($membership->gender == 0) selected @endif>Woman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
 
                            <div class="field">
                                <label class="label">Address</label>
                                <div class="control">
                                    <textarea name="address" class="textarea is-link" placeholder="Enter Your Address">{{ $membership->address}}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Valid Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="valid_status">
                                            <option>--Select Status Valid--</option>
                                            <option value="1" @if($membership->valid_status == 1) selected @endif>Valid</option>
                                            <option value="0" @if($membership->valid_status == 0) selected @endif>Invalid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Point</label>
                                <div class="control">
                                    <input name="point" class="input is-link" type="number" placeholder="Enter Points" value="{{ $membership->point}}" required>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Save</button>
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