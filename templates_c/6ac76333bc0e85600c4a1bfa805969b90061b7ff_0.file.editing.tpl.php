<?php
/* Smarty version 3.1.33, created on 2018-12-23 22:34:14
  from 'W:\domains\proect\application\views\editing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fe3364e75a5_89398018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac76333bc0e85600c4a1bfa805969b90061b7ff' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\editing.tpl',
      1 => 1545593652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1fe3364e75a5_89398018 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Сотрудники</h1>

<form method="get">
    <input type="text">
    <button>get</button>
</form>
<a href="/newuser">
    <button type="button" class="btn btn-primary">Зарегистрировать сотрудника</button>
</a>
</br>
</br>
<table class="table table-bordered">
    <tr class='active'>
        <td>id</td>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Email</td>
        <td>Должность</td>
        <td>Редактирование</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <?php if (isset($_POST[$_smarty_tpl->tpl_vars['user']->value->_data['user_id']])) {?>
         <tr>
             <form method='post'>
                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
'></td>
                 <td><input type='text' size='5'  name='Name' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
'></td>
                 <td><input type='text' size='10' name='Surname' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['surname'];?>
'></td>
                 <td><input type='text' size='15' name='Email' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['email'];?>
'></td>
                 <td><input type='text' size='15' name='Position' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['position'];?>
'></td>
                 <td>
                     <button type='submit' class='btn btn-primary' name='editingUser'>
                         <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                     </button>
                     <button type='submit' class='btn btn-primary' name='deleteUser'>
                         <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                     </button>
                 </td>
             </form>
         </tr>
         <?php } else { ?>
         <tr>
             <td><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
</td>
             <td><input type='text' size='5' name='Name' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
' disabled></td>
             <td><input type='text' size='10' name='Surname' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['surname'];?>
' disabled></td>
             <td><input type='text' size='15' name='Email' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['email'];?>
' disabled></td>
             <td><input type='text' size='15' name='Position' value='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['position'];?>
' disabled></td>
             <td>
                 <form method='post'>
                     <button type='submit' class='btn btn-primary' name='<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
'>
                         <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                     </button>
                 </form>
             </td>
         </tr>
         <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table><?php }
}
