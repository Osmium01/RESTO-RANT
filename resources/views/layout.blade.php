<html>
    <head>
    <title>
        Restorant App
    </title>

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="app.css">

<style>
    body{
    margin: 0;
    padding: 0;
    background-color: rgba(28, 49, 41, 0.767);
    font-family: sans-serif;
}
.listpage{
    width: 100%;
    height: 90vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
}

.container{
    width: 100%;
    height: 70px;
    border-radius: 20px;
    box-shadow: 2px 3px 5px black;
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: rgba(28, 49, 41, 0.767);
    margin-top: 20px;
}
.logo{
    width: 150px;
    height: 50px;
    flex-grow: 7;
}
.main{
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    padding: 5px;
    text-shadow: 2px 3px 5px black;
    letter-spacing: 2px;
}
.sub{
    color: white;
    font-weight: bold;
    margin-top: -20px;
    font-size: 10px;
    margin-left: 8px;
    letter-spacing: 3px;
}
ul{
    display: flex;
  flex-wrap:wrap;
    list-style-type: none;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
    margin-left: 30px;
    margin-top: 20px !important;
    width: 1000px;
    height: 50px;
}
li a{
    text-decoration: none;
    margin-right: 30px;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.5s;
}

li a:hover{
    color: rgb(50, 155, 150);
    text-decoration: none;
    /* border-bottom: 2px solid rgb(255, 255, 255); */
}

.footer {
      margin-top: 20px;
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .footer p {
      margin: 0;
    }

    .social-icons {
      margin-top: 10px;
    }

    .social-icons a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-size: 20px;
    }
</style>
</head>

    <body>


      <header>
     <div class="container">
        <div class="logo">
           <p class="main">Resto Rant</p>
           <p class="sub">List Your Restaurant</p>
        </div>
        <div class="links">
            <ul class="sec1">
                <li><a href="/">Home</a></li>
                <li><a href="/list">List</a></li>
                <li><a href="/add">Add</a></li>
                <li><a href="#">Search</a></li>

                @if(Session::get('user'))
                <li><a href="/">Welcome, {{Session::get('user')}} </a></li>
                <li><a href="/logout">logout</a></li>
                @else

                <li><a href="/login">login</a></li>
                <li><a href="/register">Register</a></li>
                @endif
            </ul>
        </div>
     </div>
    </header>

    </div>
  </div>
</nav>


  </div>
</nav>
        </header>
        <div>
            @yield('content')
        </div>
        
        <div class="footer">
    <p>&copy; 2023 Your RESTO RANT</p>
    <div class="social-icons">
      <a href="https://www.facebook.com/profile.php?id=100009099069998" target="_blank">Facebook</a>
      <a href="#" target="_blank">Twitter</a>
      <a href="https://www.instagram.com/b_a_b_u_s_a_h_e_b.__1/?hl=en" target="_blank">Instagram</a>
    </div>
  </div>
    </body>
</html>