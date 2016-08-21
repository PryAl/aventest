
<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="col-md-2">
    <a class="btn btn-primary" href="../" role = "button"><span class="glyphicon glyphicon-chevron-left"> </span>Вернуться к списку</a>
</div>
<div class="col-md-4 col-md-offset-2">
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li>  <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form role ="form" action="#" method="post" id="editform">
            <div class="form-group">
                <input type="text" placeholder="Имя" class="form-control" name="name" value="<?php echo $nameEdit; ?>">
            </div>
            
            <div class="form-group">
                <textarea class="form-control" rows="3" form="editform" name="descript"><?php echo $descriptEdit; ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Номер" class="form-control" name="phonenum" value="<?php echo $phonenumEdit; ?>">
            </div>
            <div class="form-group col-md-offset-8">
                <input type="submit" class="btn btn-success form-control" value="Сохранить" name="submit">
            </div>
    </form>
</div>
<!-- jQuery -->
<script src="/template/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/template/js/bootstrap.min.js"></script>

