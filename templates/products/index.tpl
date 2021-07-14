{include file="header.tpl" h1="Списко товаров"}

<p>
            <a class="link-item" href='/products/add'>Добавить</a>
        </p>
        <table class="table-products">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Цена</th>
                    <th>Валюта</th>
                    <th>Артикул</th>
                    <th>Количество</th>
                    <th>Описание</th>
                    <th>Вес</th>
                    <th>Единицы веса</th>
                    <th>*</th>
                    <th>*</th>
                </tr>
            </thead>

            <tbody>
            {foreach from=$products item=product}
                <tr>
                    <td>{$product.id}</td>
                    <td>{$product.name}</td>
                    <td>
                        {$product.category_name}
                        <br>
                        {if $product.images}
                            {foreach from=$product.images item=image}
                                <img src="{$image.path}" alt="{$image.name}" width="50" height="auto">
                            {/foreach}
                        {/if}

                    </td>
                    <td>{$product.price}</td>
                    <td>{$product.corrency}</td>
                    <td>{$product.article}</td>
                    <td>{$product.amount}</td>
                    <td>{$product.body}</td>
                    <td>{$product.weight}</td>
                    <td>{$product.unitWeight}</td>
                    <td>
                        <a  class="link-item" href="/products/edit?id={$product.id}">Редактировать</a>
                    </td>
                    <td>
                        <form action="/products/delete" method="POST">
                            <input class="link-item" type="hidden" name="id" value="{$product.id}">
                            <input class="link-item" type="submit" value="Удалить">
                        </form>
                    </td>

                </tr>
            {/foreach}
            </tbody>
        </table>
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {section loop=$pages_count name=pagination}
                    <li class="page-item {if $smarty.get.p == $smarty.section.pagination.iteration} active{/if}"><a class="page-link" href="{$smarty.server.PATH_INFO}?p={$smarty.section.pagination.iteration}">{$smarty.section.pagination.iteration}</a></li>
                {/section}
            </ul>
        </nav>
{include file="bottom.tpl"}

