<nav class="navbar navbar-expand-sm bg-maroon navbar-dark">
    <a class="navbar-brand" href="#">Computational Intelligence - NPU</a>
    <div class="collapse navbar-collapse">
        <div class="mr-auto"></div>
        <img class="w3-padding rounded" src="../images/npu.png" style="width: 60px; height: 60px; object-fit: cover;">
    </div>

</nav>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 pt-4 px-0" style="background-color: #e8e8e8">
            <?php include 'sidemenu.php'; ?>
        </div>

        <div class="col-md-10 pt-4">
            <!-- notif pesan success -->
            <?php if (!empty($_SESSION['pesan'])) { ?>
                <div class="alert alert-success">
                    <i class="fa fa-check"></i>
                    <?php echo $_SESSION['pesan']; ?>
                    <?php $_SESSION['pesan'] = ''; ?>
                </div>
                <br>
            <?php } ?>
            <!-- end notif pesan success -->
            <!-- notif pesan ewrror -->
            <?php if (!empty($_SESSION['error'])) { ?>
                <div class="alert alert-danger">
                    <i class="fa fa-check"></i>
                    <?php echo $_SESSION['error']; ?>
                    <?php $_SESSION['error'] = ''; ?>
                </div>
                <br>
            <?php } ?>
            <!-- end notif pesan ewrror -->