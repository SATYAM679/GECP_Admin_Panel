<?php
session_start();
if (isset($_GET['del']) && isset($_SESSION['id']) && $_SESSION['active'] == 1) {
    require 'dbh.inc.php';

    $id = $_GET['del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted user success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../active_req.php?userDeleted');
    mysqli_close($conn);
} else if (isset($_GET['exp_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['exp_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM experience WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted user success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../profile.php?experienceDeleted');
    mysqli_close($conn);
    exit();
} else if (isset($_GET['edu_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['edu_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM education WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted education success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../profile.php?educationRecordDeleted');
    mysqli_close($conn);
    exit();
} else if (isset($_GET['dept_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['dept_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM departments WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted department success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../departments.php?departmentDeleted');
    mysqli_close($conn);
    exit();
} else if (isset($_GET['pub_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['pub_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM publications WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted publication success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../profile.php?publicationRecordDeleted');
    mysqli_close($conn);
    exit();
} else if (isset($_GET['news_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['news_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM news WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted news successfull.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../news.php?newsDeleted');
    mysqli_close($conn);
    exit();
}else if (isset($_GET['lab_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['lab_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM labs WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted Lab successfull.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../labs.php?labsDeleted');
    mysqli_close($conn);
    exit();
}
else if (isset($_GET['commity_del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['commity_del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM commities WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Commity deleted successfull.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../commities.php?commityDeleted');
    mysqli_close($conn);
    exit();
} else {
    header('Location: ../login.php?error=logout');
    exit();
}
