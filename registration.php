<?php
$conn = mysqli_connect('localhost', 'root', '', 'gruda_db');

// Initialize the error variable
$errors = [];

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // Password length validation
    if (strlen($password) < 8 || strlen($password) > 10) {
        $errors[] = 'Password must be between 8 and 10 characters.';
    }

    // Email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // Username alphanumeric characters validation
    if (!preg_match('/^[a-zA-Z0-9]*$/', $name)) {
        $errors[] = 'Username must contain only letters and numbers.';
    }

    $select = "SELECT * FROM users WHERE EMAIL_ID = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $errors[] = 'User already exists.';
    }

    if (count($errors) === 0) {
        if ($password != $cpassword) {
            $errors[] = 'Passwords do not match.';
        } else {
            $password = md5($password);

            $insert = "INSERT INTO users(USERNAME, EMAIL_ID, PASSWORD, USER_TYPE) VALUES('$name', '$email', '$password', '$user_type')";
            mysqli_query($conn, $insert);
            header('location: login.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-9/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 06:52:48 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>

<link rel="stylesheet" href="styles/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="styles/css/style.css">
<meta name="robots" content="noindex, follow">
<script nonce="38bde386-74e8-4bd6-ada0-186ec8728c6c">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="main">
<div class="container">
<div class="signup-content">
<form method="POST" action="" id="signup-form" class="signup-form">
<h2>Sign up </h2>
<?php if (count($errors) > 0) : ?>
                    <div class="error-messages">
                        <?php foreach ($errors as $error) : ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Username" />
</div>
<div class="form-group">
<input type="email" class="form-input" name="email" id="email" placeholder="Email" />
</div>
<div class="form-group">
<input type="password" class="form-input" name="password" id="password" placeholder="Enter Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<input type="password" class="form-input" name="cpassword" id="password" placeholder="Confirm Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
 
</div>

<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up" />
<a href="login.php" class="submit-link submit">Sign in</a>
</div>
</form>
</div>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"816624391eeb84c2","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>


</html>