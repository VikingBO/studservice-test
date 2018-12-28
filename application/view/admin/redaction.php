<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Редактируем запись "<?php $params['record_title'] ?>"</h1>
        </div>
    </div>
    <form action="/admin/set" novalidate type="POST">
        <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Название записи</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="Введите ваш логин" value="<?= $params['record_title'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Текст записи</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="Введите ваш логин" value="<?= $params['record_content'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="img" class="col-sm-2 col-form-label">Изображение записи</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="img" placeholder="Введите ваш логин" value="<?= $params['record_img'] ?>">
            </div>
        </div>
        <div class="offset-6">
            <button type="submit" class="btn btn-primary mb-2">Сохранить</button>
        </div>
    </form>
</div>
