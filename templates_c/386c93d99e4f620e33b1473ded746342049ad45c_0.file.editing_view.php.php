<?php
/* Smarty version 3.1.33, created on 2018-12-16 10:38:28
  from 'W:\domains\proect\application\views\editing_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1600f428f7d3_26405436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '386c93d99e4f620e33b1473ded746342049ad45c' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\editing_view.php',
      1 => 1544734607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1600f428f7d3_26405436 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Поп ап для пользователя-->
<div class=" modal fade bs-example-modal-lg" id='newuser' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method = 'post'>
                <div class='form-group'>
                    <h1>Добавление сотрудника</h1>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name='buttonAddUser'>Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>


 <h1>Редактирование справочника</h1>
     
	
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newuser">Добавить сотрудника</button>

	</br>
    <div class='articleIndex2'>
        <table class="table table-bordered">
            <tr class='info'>
                <td>id</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Email</td>
                <td>Должность</td>
                <td>Редактирование</td>
            </tr>
            <?php echo '<?php ';?>//выводим данные сотрудников
            foreach ($users as $user) {

					
					if(isset($_POST[$user->_data[user_id]])) {

						echo"<tr>
							 <form method='post'>
							 <td>". $user->_data[user_id] ." <input type='hidden' name='id' value='".$user->_data[user_id] ."'></td>
							 <td><input type='text' size='5'  name='Name' value='".             $user->_data[name] ."'></td>
							 <td><input type='text' size='10' name='Surname' value='".          $user->_data[surname] ."'></td>
							 <td><input type='text' size='15' name='Email' value='".            $user->_data[email] ."'></td>
							 <td><input type='text' size='15' name='Position' value='".         $user->_data[position] ."'></td>
							 <td>
								 <button type='submit' class='btn btn-primary' name='editingUser'>
									 <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
								 </button>
								 <button type='submit' class='btn btn-primary' name='deleteUser'>
									 <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
								 </button>  
							 </td>
							 </form>
						</tr>";
					}
					else {
						echo"<tr>
							 <td>". $user->_data[user_id] ."</td>
							 <td><input type='text' size='5' name='Name' value='".      $user->_data[name] ."' disabled></td>
							 <td><input type='text' size='10' name='Surname' value='".  $user->_data[surname] ."' disabled></td>
							 <td><input type='text' size='15' name='Email' value='".    $user->_data[email] ."' disabled></td>
							 <td><input type='text' size='15' name='Position' value='". $user->_data[position] ."' disabled></td>
							 <td>
								<form method='post'>
									<button type='submit' class='btn btn-primary' name='". $user->_data[user_id] ."'>
										<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
									</button>
								</form>
							 </td>
						</tr>";
					}
				}
				
            <?php echo '?>';?>
        </table><?php }
}
