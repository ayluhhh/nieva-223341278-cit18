<form method="POST" action="{{ route('register') }}">
@csrf
<input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
@error('name')
<div>{{ $message }}</div>
@enderror

<input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
@error('email')
<div>{{ $message }}</div>
@enderror

<input type="password" name="password" placeholder="Password">
@error('password')
<div>{{ $message }}</div>
@enderror

<input type="password" name="password_confirmation" placeholder="Confirm Password">

<button type="submit">Register</button>
</form>
<style>
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f7fa;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="password"]:focus {
    border-color: #4CAF50;
    outline: none;
}

form div {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

form button {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

form input, form button {
    box-sizing: border-box;
}

    </style>