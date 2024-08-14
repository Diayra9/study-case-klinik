<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reservation</title>
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

        #stateInput {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
                            <p class="card-header-title">Add Reservation</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." required/>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Age</label>
                                <div class="control">
                                    <input name="age" type="number" class="input is-link" placeholder="Masukkan Umur Anda Disini.." required/>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Phone Number</label>
                                <div class="control">
                                    <input name="phone_number" type="number" class="input is-link" placeholder="Masukkan Nomor Telepom Anda Disini.." required/>
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
                                <label class="label">Location</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="location">
                                            <option>--Select Location--</option>
                                            <option value="5">Surabaya</option>
                                            <option value="4">Surakarta</option>
                                            <option value="3">Sidoarjo</option>
                                            <option value="2">Bandung</option>
                                            <option value="1">Jakarta</option>
                                            <option value="0">Jogja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Doctor</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="doctor">
                                            <option>--Select Doctor--</option>
                                            <option value="1">Aesthetic Doctor</option>
                                            <option value="0">Beautician</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="field">
                                <label class="label">Jenis Treatment</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="treatment_id">
                                            <option>--Select Treatment--</option>
                                            @foreach($treatments as $treatment)
                                            <option value="{{ $treatment->id }}">{{ $treatment->name }} - {{ $treatment->selling_price }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="field">
                                <label class="label">Treatment</label>
                                <div class="control">
                                    <input list="treatmentOptions" id="stateInput" placeholder="Pilih atau ketik untuk mencari treatment:" />
                                    <datalist id="treatmentOptions">
                                        @foreach($treatments as $treatment)
                                        <option value="{{ $treatment->name }} - {{ $treatment->selling_price }}" data-id="{{ $treatment->id }}"></option>
                                        @endforeach
                                    </datalist>
                                    <input type="hidden" name="treatment_id" id="treatmentId">
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="status">
                                            <option>--Select Status--</option>
                                            <option value="3">Attended</option>
                                            <option value="2">Canceled</option>
                                            <option value="1">Confirmed</option>
                                            <option value="0">Waiting Response</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Reservation Date</label>
                                <div class="control">
                                    <input name="date" type="date" class="input is-link" placeholder="Masukkan Tanggal Reservasi Disini.." required/>
                                </div>
                            </div>  

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Add</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('view-reservation') }}" class="button is-link">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        document.getElementById('stateInput').addEventListener('input', function() {
            var input = this;
            var list = document.getElementById('treatmentOptions');
            var hiddenInput = document.getElementById('treatmentId');
            var options = list.options;

            hiddenInput.value = ''; // Clear the hidden input value if input is changed

            for (var i = 0; i < options.length; i++) {
                if (options[i].value === input.value) {
                    hiddenInput.value = options[i].getAttribute('data-id');
                    break;
                }
            }
        });
    </script>

    @include('admin.footer')
</body>

</html>