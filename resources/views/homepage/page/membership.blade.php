@extends('homepage.template.layout')

@section('title', 'Membership Registration - Éternelle Beauté')

@section('content')
    <!--- ISI --->
    <div class="membership">
        <span class="membership-online">MEMBERSHIP REGISTRATION</span>
        <div class="line-1"></div>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg')}}" />

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
                        <input type="date" name="birthday" value="{{ old('birthday') }}" required/>
                        @error('birthday')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="button-container">
                        <button class="gold-button">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection