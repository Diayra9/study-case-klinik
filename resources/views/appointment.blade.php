<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Online</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
@include('header')
    <!--- ISI --->
    <div class="appointment">
        <span class="appointment-online">APPOINTMENT ONLINE</span>
        <div class="line-1"></div>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif
        
        <form action="{{ url('save-appointment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-container">
                <div class="form-column">
                    <div class="form-group">
                        <label class="full-name">Full Name :</label>
                        <input type="text" class="input-field" name="name" placeholder="Your Full Name..." required/>
                    </div>

                    <div class="form-group">
                        <label class="no-telp">Phone Number :</label>
                        <input type="number" class="input-field" name="phone_number" placeholder="Your Phone Number..." required/>
                    </div>

                    <div class="form-group">
                        <label class="your-gender">Your Gender :</label>
                        <select name="gender" class="select-field" required>
                            <option disabled selected>--Select Gender--</option>
                            <option value="2">Other</option>
                            <option value="1">Man</option>
                            <option value="0">Woman</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="your-age">Your Age :</label>
                        <input type="number" class="input-field" name="age" placeholder="How Old Are You?" required/>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-group">
                        <label class="choose-treatment">Choose Treatment :</label>
                        <select name="treatment_id" class="select-field" required>
                            <option disabled selected>--Select Treatment--</option>
                            @foreach($treatments as $treatment)
                            <option value="{{ $treatment->id }}">{{ $treatment->name }} - {{ $treatment->selling_price }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="location">Location :</label>
                        <select name="location" class="select-field" required>
                            <option disabled selected>--Select Location--</option>
                            <option value="5">Surabaya</option>
                            <option value="4">Surakarta</option>
                            <option value="3">Sidoarjo</option>
                            <option value="2">Bandung</option>
                            <option value="1">Jakarta</option>
                            <option value="0">Jogja</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="choose-your-service">Choose Your Service :</label>
                        <select name="doctor" class="select-field" required>
                            <option disabled selected>--Select Doctor--</option>
                            <option value="1">Aesthetic Doctor</option>
                            <option value="0">Beautician</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="reservation-date">Reservation Date :</label>
                        <input type="date" class="input-field" name="date" required/>
                    </div>

                </div>
            </div><br>
            <div class="control">
                <button type="submit" class="button">Reserve Now</button>
            </div>
        </form>
    </div>
@include('footer')
</body>
</html>