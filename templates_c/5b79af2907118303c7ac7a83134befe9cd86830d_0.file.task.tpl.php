<?php
/* Smarty version 3.1.33, created on 2018-12-26 22:15:23
  from 'W:\domains\proect\application\views\task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c23d34b1592d3_55871858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b79af2907118303c7ac7a83134befe9cd86830d' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\task.tpl',
      1 => 1545772271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c23d34b1592d3_55871858 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Задача №<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['task_id'];?>
</h1>

<form>
    Статус    <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['status'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['priority'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['truck'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['topic'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['assigned'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['update'];?>
">
    </br>
    Приоритет <input value="<?php echo $_smarty_tpl->tpl_vars['task']->value->_data['category'];?>
">
</form>




<?php }
}
