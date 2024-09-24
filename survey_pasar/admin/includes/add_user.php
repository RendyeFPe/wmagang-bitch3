<style>
    h2 {
        text-align: center;
    }

    hr {
        width: 25%;
        border: solid 1px;
    }
</style>

<h2>REGISTER A NEW USER</h2>
<hr>

<?php
if (isset($_POST['create_user'])) {
    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_role = $_POST['user_role'];
    $username = $_POST['username'];
    // $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // validasi password
    function validate_password($password)
    {
        return preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password);
    }

    if (!validate_password($user_password)) {
        echo '
        <script>
        alert("Password harus terdiri dari huruf kecil, huruf kapital, angka, dan simbol!");
        </script>
        ';
        exit;
    }


    $user_firstname = mysqli_real_escape_string($connection, $user_firstname);
    $user_lastname = mysqli_real_escape_string($connection, $user_lastname);
    $username = mysqli_real_escape_string($connection, $username);
    // $user_email = mysqli_real_escape_string($connection, $user_email);
    $user_password = mysqli_real_escape_string($connection, $user_password);

    // enkripsi password
    $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));

    $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_password) ";
    $query .= "VALUES(?,?,?,?,?)";

    $stmt_create_user_query = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt_create_user_query, "sssss", $user_firstname, $user_lastname, $user_role, $username, $user_password);
    mysqli_stmt_execute($stmt_create_user_query);
    confirm_query($stmt_create_user_query);
    mysqli_stmt_close($stmt_create_user_query);


    if ($stmt_create_user_query) {
        header("location:users.php");
    } else {
        echo '
    <script>
    alert("Registrasi Gagal");
    </script>
    ';
    }

    // header("location:users.php");
}

?>

<div class="col-sm-5">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname">
        </div>

        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>

        <div class="form-group">
            <label for="user_role">Role</label><br>
            <select name="user_role" id="">
                <option value="">select option</option>
                <option value="admin">Admin</option>
                <option value="surveyorBandar">Surveyor Bandar</option>
                <option value="surveyorPahing">Surveyor Pahing</option>
                <option value="surveyorSetonobetek">Surveyor Setonobetek</option>
            </select>
        </div>

        <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" class="form-control" name="user_password" id="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Minimal 8 karakter, terdiri dari huruf kecil, huruf kapital, angka, dan simbol" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Password harus terdiri dari huruf kecil, huruf kapital, angka, dan simbol!')">
            <input type="checkbox" onclick="togglePassword()">Tampilkan Password
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary " name="create_user" value="Add user">
        </div>
    </form>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("user_password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>