
<h2> <?= $title ?> </h2>
<?php foreach ($users as $user) : ?>
<div class="row">
    <div class="col-md-3">
        <?php echo $user['employee_firstname'] ?>  <?php echo $user['employee_lastname'] ?>
    </div>

    <div class="col-md-3">
        <?php echo $user['lemployeelast_login'] ?>
    </div>
    <div class="col-md-2">
        <?php echo $user['employee_occupation'] ?>
    </div>
    <div class="col-md-2">
        <a class="btn btn-danger pull left">Block</a>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary ">Edit</a>
    </div>
    <br>
</div>
<?php endforeach;?>