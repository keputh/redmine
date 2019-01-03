<form method = 'post'>
    <div class='form-group'>
        <h1>Создание сотрудника</h1>
        <label for="exampleInputName2">Имя</label>
        <input name = 'Name' type='text' class='form-control' id='exampleInputName2' placeholder="Имя" required>
    </div>
    <div class="form-group">
        <label for="exampleInputName2">Фамилия</label>
        <input name = 'Surname' type='text' class="form-control" id='exampleInputName2' placeholder="Фамилия" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name = 'Email' type='email' class="form-control" id='exampleInputEmail1' placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputName2">Должность</label>
        <select class="form-control" name = 'Position'>
            <option>Должность</option>
            <option>Программист</option>
            <option>Администратор</option>
            <option>Маркетолог</option>
            <option>Бухгалтер</option>
        </select>
    </div>
    <div class="modal-footer">
        <a href = '/editing'><button type="button" class="btn btn-default" data-dismiss="modal">Назад</button></a>
        <button type="submit" class="btn btn-primary" name='buttonAddUser'>Добавить</button>
    </div>
</form>