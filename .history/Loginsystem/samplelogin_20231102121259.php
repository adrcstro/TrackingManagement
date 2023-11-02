<!-- HTML code -->
<form method="post" action="loginprocess.php">
    <div class="dropdown" name="Role">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="loginDropdown">
            Select User Type:
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" onclick="changeLoginType('Passenger')">Passenger</a></li>
            <li><a class="dropdown-item" href="#" onclick="changeLoginType('Driver')">Driver</a></li>
            <li><a class="dropdown-item" href="#" onclick="changeLoginType('Admin')">Admin</a></li>
        </ul>
    </div>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Log In">
</form>
