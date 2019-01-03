<?php
/* Smarty version 3.1.33, created on 2018-12-16 19:23:08
  from 'W:\domains\proect\application\views\newuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c167bec84d0f4_37476476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1fd324cc0ade02883887f2e511c221e0ab32cf' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\newuser.tpl',
      1 => 1544977384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c167bec84d0f4_37476476 (Smarty_Internal_Template $_smarty_tpl) {
?><form method = 'post'>
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
</form><?php }
}
