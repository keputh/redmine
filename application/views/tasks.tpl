<h1>Задачи</h1>

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
                    {foreach $users as $user}
                        <option name = '{$user->_data['user_id']}' value="{$user->_data['user_id']}"
                                {if {$user->_data['user_id']} eq {$smarty.post.Create}}
                                    selected = 'selected'
                                {/if}
                        >
                            {$user->_data['surname']} {$user->_data['name']}
                        </option>
                    {/foreach}
                </select>
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3">
                <select class="form-control" name = 'Newfilter'>
                    <option>Добавить фильтр</option>
                    {foreach $filters as $filter}
                        <option value = '{$filter->_data['filter_id']}'
                                {if {$filter->_data['filter_id']} eq {$smarty.post.Newfilter}}
                                    selected = 'selected'
                                {/if}
                        >
                            {$filter->_data['name']}
                        </option>
                    {/foreach}
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

   {foreach $tasks as $task}
        <tr {if $task->_data['priority'] eq 'Срочный'} class='danger'{/if}>
            <td> <input type="checkbox" name="option1" value="{$task->_data['task_id']}"></td>
            <td>{$task->_data['task_id']}</td>
            <td>{$task->_data['truck']}</td>
            <td>{$task->_data['status']}</td>
            <td>{$task->_data['priority']}</td>
            <td><a href="/tasks/task/{$task->_data['task_id']}">{$task->_data['topic']}</a></td>
            <td>{$task->_data['assigned']}</td>
            <td>{$task->_data['update']}</td>
            <td>{$task->_data['tag']}</td>
            <td>{$task->_data['category']}</td>
        </tr>
    {/foreach}

</table>