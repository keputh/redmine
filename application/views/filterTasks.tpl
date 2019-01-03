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