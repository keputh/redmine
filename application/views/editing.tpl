<script>
    <!--Удаление сотрудника из базы и динамически с страницы-->
    function buttonClick(button, id) {
        if (!confirm('удалить сотрудника?')){
            return false;
        }

        $.post(
             "/editing",
            {
                del: id
            }
        ).done(function(data){
            alert(data);
            (button).closest('tr').remove();
        }).fail(function(data){
            alert('ошибка');
        });
    }

</script>

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
    {foreach $users as $user}
        {if isset($smarty.post.{$user->_data['user_id']})}
         <tr>
             <form method='post'>
                 <td>{$user->_data['user_id']}<input type='hidden' name='id' value='{$user->_data['user_id']}'></td>
                 <td><input type='text' size='5'  name='Name' value='{$user->_data['name']}'></td>
                 <td><input type='text' size='10' name='Surname' value='{$user->_data['surname']}'></td>
                 <td><input type='text' size='15' name='Email' value='{$user->_data['email']}'></td>
                 <td><input type='text' size='15' name='Position' value='{$user->_data['position']}'></td>
                 <td>
                     <button type='submit' class='btn btn-primary' name='editingUser'>
                         <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                     </button>
                     <button type='button' class='row-remove' onclick="buttonClick(this, {$user->_data['user_id']})">
                         <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                     </button>
                 </td>
             </form>
         </tr>
         {else}
         <tr>
             <td>{$user->_data['user_id']}</td>
             <td><input type='text' size='5' name='Name' value='{$user->_data['name']}' disabled></td>
             <td><input type='text' size='10' name='Surname' value='{$user->_data['surname']}' disabled></td>
             <td><input type='text' size='15' name='Email' value='{$user->_data['email']}' disabled></td>
             <td><input type='text' size='15' name='Position' value='{$user->_data['position']}' disabled></td>
             <td>
                 <form method='post'>
                     <button type='submit' class='btn btn-primary' name='{$user->_data['user_id']}'>
                         <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                     </button>
                 </form>
             </td>
         </tr>
         {/if}
         {/foreach}
    </table>

