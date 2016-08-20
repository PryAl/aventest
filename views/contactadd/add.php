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
    <?php if (isset($success) && is_array($success)): ?>
        <ul>
            <?php foreach ($success as $suc): ?>
                <li>  <?php echo $suc; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<form role ="form" action="#" method="post">

        <div class="form-group">
            <input type="text" placeholder="Имя..." class="form-control" name="name" value="<?php echo $name; ?>" id="name">
            <p class="help-block">буквы русский/английский, до 50 символов</p>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Описание..." class="form-control" name="descript" value="<?php echo $descript; ?>" id="descript">
            <p class="help-block">текстовое поле, буквы/цифры/символы, 255 символов</p>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Номер телефона..." class="form-control" name="phonenum" value="<?php echo $phonenum; ?>" id="phonenum">
            <p class="help-block">цифры, без пробелов, формата 123456789</p>
        </div>
        <div class="form-group col-md-offset-8">
            <input type="submit" class="btn btn-success form-control" value="Добавить" name="submit">
        </div>

</form>
    </div>
<!-- jQuery -->
<script src="/template/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/template/js/bootstrap.min.js"></script>