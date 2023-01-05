












<?php include 'header.php'; ?>

<!-- echo $_SERVER['PHP_SELF'];
how to get the URL to pass active class!! -->

<div class="container">
    <h1 class="text-center my-5">Pick a color</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="recookie.php" method="POST" enctype="" class="form_1 mb-5">
            <input name="color" value="<?= $_COOKIE['divColor']; ?>" type="color" style="width: 100%; margin:auto; height: 300px;" >
            <button type="submit" class="btn btn-info d-block my-3 form-control">Submit</button>
            </form>
        </div>
        <div class="col-md-6 my-5" style="height: 300px; background-color: <?= $_COOKIE['divColor']; ?>;"></div>
    </div>
</div>

























<?php include 'footer.php'; ?>