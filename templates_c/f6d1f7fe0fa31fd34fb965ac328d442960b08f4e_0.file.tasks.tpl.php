<?php
/* Smarty version 3.1.33, created on 2018-12-25 08:00:41
  from 'W:\domains\proect\application\views\tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c21b9797d1fd0_48692821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d1f7fe0fa31fd34fb965ac328d442960b08f4e' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\tasks.tpl',
      1 => 1545714038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c21b9797d1fd0_48692821 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Задачи</h1>

<form method = 'post'>
    <h5 class="line">
        <a data-toggle="collapse" data-target="#filter">
            <span class='glyphicon glyphicon-chevron-down' aria-hidden='true'></span>
        </a>
        Фильтры
    </h5>
    </br>

    <div id="filter" class="collapse in">
        <div class="row">
            <div class="col-md-3">
                <input type="checkbox" name="option1" value="a1" checked> Создано
            </div>

            <div class="col-md-3">
                <select class="form-control" name = 'Create'>
                    <option>Все</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <option name = '<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
' value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
"
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_POST['Create'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>
                                    selected = 'selected'
                                <?php }?>
                        >
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>

                        </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3">
                <select class="form-control" name = 'Newfilter'>
                    <option>Добавить фильтр</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <option value = '<?php echo $_smarty_tpl->tpl_vars['filter']->value->_data['filter_id'];?>
'
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['filter']->value->_data['filter_id'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_POST['Newfilter'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable3 == $_prefixVariable4) {?>
                                    selected = 'selected'
                                <?php }?>
                        >
                            <?php echo $_smarty_tpl->tpl_vars['filter']->value->_data['name'];?>

                        </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

        </div>
    </div>

    </br>
    <h5 class="line">
        <a data-toggle="collapse" data-target="#option">
            <span class='glyphicon glyphicon-chevron-down' aria-hidden='true'></span>
        </a>
        Опции
    </h5>
    <div id="option" class="collapse">...</div>
    </br> </br>
    <button type="submit" class="btn btn-primary" name='filter'>выбрать</button>
</form>
</br>
</br>

<table class="table table-bordered">
    <tr class='active'>
        <td><a href = '#'>%</a></td>
        <td><a href = '#'>#</a></td>
        <td><a href = '#'>Трекер</a></td>
        <td><a href = '#'>Статус</a></td>
        <td><a href = '#'>Приоритет</a></td>
        <td><a href = '#'>Тема</a></td>
        <td><a href = '#'>Назначена</a></td>
        <td><a href = '#'>Обновлено</a></td>
        <td><a href = '#'>tag</a></td>
        <td><a href = '#'>Категория</a></td>
    </tr>

   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
        <tr <?php if ($_smarty_tpl->tpl_vars['task']->value->_data['priority'] == 'Срочный') {?> class='danger'<?php }?>>
            <td> <input type="checkbox" name="option1" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['task_id'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['task_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['truck'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['status'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['priority'];?>
</td>
            <td><a href="/tasks/task/<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['task_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['topic'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['assigned'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['update'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['tag'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->_data['category'];?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
