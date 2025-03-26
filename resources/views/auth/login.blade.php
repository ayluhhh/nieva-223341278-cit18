<form method="POST" action="{{ route('login') }}">
@csrf
<input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
<input type="password" name="password" placeholder="Password">
<button type="submit">Login</button>

<!-- Display the error message if it exists -->
@if(session('error'))
<div style="color: red; margin-top: 10px;">
{{ session('error') }}
</div>
@endif
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