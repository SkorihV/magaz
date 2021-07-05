{include file="header.tpl" h1="Список категорий"}

<p>
            <a class="link-item" href='/categories/add'>Добавить</a>
        </p>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Название категории</th>
                    <th>*</th>
                    <th>*</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$categories item=category}
                <tr>
                    <td>{$category.id}</td>
                    <td>{$category.name}</td>
                    <td>
                        <a class="link-item" href="/categories/edit?id={$category.id}">Редактировать</a>
                    </td>
                    <td>
                        <form action="/categories/delete" method="POST">
                            <input class="link-item" type="hidden" name="id" value="{$category.id}">
                            <input class="link-item" type="submit" value="Удалить">
                        </form>
                    </td>

                </tr>
            {/foreach}
            </tbody>
        </table>
{include file="bottom.tpl"}

