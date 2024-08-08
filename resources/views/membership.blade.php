<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membership Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../public/styles.css') }}" />
</head>

<body>
@include('header')
    <!--- ISI --->
    <div class="membership">
        <span class="membership-online">MEMBERSHIP REGISTRATION</span>
        <div class="line-1"></div>
        <img class="line-2" src="{{ asset('../assets/vectors/line_2_x2.svg')}}" />

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif
      
        <form action="{{ url('save-membership') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-1">
                <div class="form-section">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Your Full Name..." required/>
                    </div>
                    <div class="input-group">
                        <label for="gender">Gender</label>
                        <div class="gender-options" name="gender">
                            <label><input type="radio" name="gender" value="0" /> Female</label>
                            <label><input type="radio" name="gender" value="1" /> Male</label>
                            <label><input type="radio" name="gender" value="2" /> Other</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="no_phone" placeholder="Your Phone Number..." required/>
                    </div>
                    <div class="input-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Your Address..." required/>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Your Email Here..." required/>
                    </div>
                    <div class="input-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="birthday" required/>
                    </div>
                    <div class="button-container">
                        <button class="gold-button">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@include('footer')
</body>
</html>