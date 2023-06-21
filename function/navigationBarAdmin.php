<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation Bar Admin</title>
    <?php 
    include "favicon.php"; 
    ?>

<style>

:root {
--color-white: rgb(255,255,255);
--color-green: rgb(39,210,109);
--color-darkblue: rgb(48, 34, 118);
--color-red: rgb(255,0,0);
--color-lightblue: rgba(43,159,213,0.8);
--color-yellow: rgb(255, 235, 71);
--color-black: rg(0,0,0);
}

*{
    margin:0;
    padding:0;
}

.logo {
  color: var(--color-darkblue);

}

.logo span {
  color: var(--color-lightblue);
}

.imagelogo{
    width: 15%;
    float: left;
    border-radius: 100px;
}

nav{
    width: 100%;
    height: 80px;
    background-color: ghostwhite;
    opacity: 0.9;
}

nav p{
    color: #222;
    font-size: 35px;
    font-family: Lucida Handwriting;
    font-weight: bold;
    line-height: 70px;
    float :left;
    padding : 0px 20px;
    margin-left: 2px;
    margin-right: 600px;
}

nav ul {
    float: left;
}

nav ul li{
    float: left;
    list-style: none;
    position: relative;
}

nav ul li a {
    display: block;
    color: black;
    font-size: 20px;
    padding: 26px 10px;
    text-decoration: none;
    font-weight: 600;
}

nav ul li a:hover {
    color: var(--color-lightblue);
}

nav ul li a:active {
    color: var(--color-red);
}

nav ul li ul {
    display: none;
    position: absolute;
    background-color: ghostwhite;
    color: white;
    padding: 10px;
    border-radius: 0px 0px 10px 10px;
}

nav ul li:hover ul{
    display: block;
}

nav ul li ul li{
    width: 180px;
    border-radius: 4px;
}

nav ul li ul li a{
    padding: 8px 14px;
}

</style>
</head>
<body>

<nav>
    <p class="logo"><img class="imagelogo" src="../image/dengueIcon.png"><span>Dengue</span>System</p>
    <ul>
        <li><a href="http://localhost/workshop2/adminLogin/successLoginAdmin.php">Main</a></li>
        <li><a href="http://localhost/workshop2/adminLogin/adminProfile.php">Profile</a></li>
        <li><a href="http://localhost/workshop2/adminLogin/admincpbvkkmLogout.php" onclick="return confirm('Are you sure to logout?');">Logout</a></li>
    </ul>
</nav>

</body>
</html>

