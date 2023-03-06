<?php 
//include_once './database-handler.php';

// Function can be used in both the login and signup handlers
function checkUserExists($conn, $username, $email) {
$sql = "SELECT * FROM users WHERE user_uid = ? OR user_email = ?;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?signup=stmtfailed");
    exit();
}
// Uses prepared statements for security
mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
} else {
   $result = false;
   return $result; 
}
mysqli_stmt_close($stmt);
}

//Create user using prepared statements
function createUser($conn, $first, $last,$username, $email, $pwd) {
    $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?signup=stmtfailed");
        exit();
    }
   // echo $stmt->prepare($sql); 
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // Uses prepared statements for security
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?signup=success"); 
    exit();
    }

// Saves product to database using prepared statements
function createProduct($conn, $prodname, $prodtags, $proddesc, $imgPath) {
    session_start();
    $user = $_SESSION["userid"];
    $sql = "INSERT INTO products(prod_name, prod_tags, prod_desc, prod_user, img_path) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../create-product.php?createprod=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssss", $prodname, $prodtags,$proddesc,$user, $imgPath);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?createprod=success");
    exit();
}

function loginUser($conn, $user, $password) {
    $userExists = checkUserExists($conn, $user, $user);

    if ($userExists === false) {
        header("Location: ../login.php?login=noaccount");
        exit();
    }

    $pwdHashed = $userExists['user_pwd'];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false) {
        header("Location:../login.php?login=incorrectpassword&p=$pwdHashed");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userExists["user_id"]; 
        $_SESSION["firstname"] = $userExists["user_first"]; 
        $_SESSION["lastname"] = $userExists["user_id"];
        $name = $_SESSION["firstname"];
       // header("Location:../header.php");
        header("Location:../index.php?name=$name");
        exit();
    }
}

// destroy session and remove user info from variables
function logout() {
    session_unset();
    session_destroy();
    header("Location:../index.php");
    exit();
}

?>