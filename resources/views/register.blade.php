@extends('layout')

@section('content')
<div class="custom-container">
    <h1 class="custom-heading">Registration Page</h1>

    <div class="col-sm-8">
        <form method="post" action="register" class="custom-form">
            @csrf
            <div class="custom-form-group">
                <label for="name" class="custom-label">Name</label>
                <input type="text" id="name" name="name" class="custom-input" placeholder="Enter Name" required>
            </div>
            <div class="custom-form-group">
                <label for="email" class="custom-label">Email</label>
                <input type="text" id="email" name="email" class="custom-input" placeholder="Enter Email" required>
            </div>
            <div class="custom-form-group">
                <label for="password" class="custom-label">Password</label>
                <input type="password" id="password" name="password" class="custom-input" placeholder="Enter Password" required>
            </div>
            <div class="custom-form-group">
                <label for="contact" class="custom-label">Contact N0.</label>
                <input type="text" id="contact" name="contact" class="custom-input" placeholder="Enter Contact" required>
            </div>
            <button type="submit" class="custom-btn">Submit</button>
        </form>
    </div>
</div>
@stop

<style>
    .custom-container {
        height: 70vh;
        width: 50vw;
        margin: 50px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .custom-heading {
        font-size: 24px;
        color: chartreuse;
        text-align: center;
    }

    .custom-form {
        max-width: 800px;
        margin: 0 auto;
    }

    .custom-form-group {
        margin-bottom: 20px;
    }

    .custom-label {
        display: block;
        font-size: 16px;
        margin-bottom: 5px;
        color: chartreuse;
    }

    .custom-input {
        background-color: rgba(28, 40, 41, 0.767);
        display: block;
        color: white;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .custom-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border-radius: 4px;
    }

    .custom-btn {
        background-color: #3498db;
        color: #fff;
        border: 1px solid #3498db;
    }

    .custom-btn:hover {
        background-color: #2980b9;
        border: 1px solid #2980b9;
    }
</style>
