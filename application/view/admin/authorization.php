<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Авторизация</h1>
        </div>
    </div>
    <form action="/admin/authorization" novalidate type="POST">
        <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Ваш логин</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="Введите ваш логин" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Ваш пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="number" placeholder="Введите ваш пароль" value="">
            </div>
        </div>
        <div class="offset-6">
            <button type="submit" class="btn btn-primary mb-2">Авторизоваться</button>
        </div>
    </form>
</div>
