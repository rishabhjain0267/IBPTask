<?php
include 'code/connection.inc.php';

include 'include/header.php';

if (isset($_SESSION['USER_LOGIN']) == '') {
    header('location:login.php');
}

?>

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IBP Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                    
                </ul>
                <form class="d-flex">
                    <a href="logout.php" class="btn btn-success" style="background-color: blue; color: white;">LOGOUT</a>
                </form>
            </div>
        </div>
    </nav>
</div>
<h1 style="text-align: center; padding: 10px;">Welcome</h1>
<h2 style="text-align: center; padding: 10px;"><?php echo $_SESSION['USER_LOGIN']; ?></h2>



<?php include 'include/footer.php' ?>