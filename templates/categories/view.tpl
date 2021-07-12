{include file="header.tpl" h1="Списко товаров"}

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
            <td>{$product.category_name}</td>
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
{include file="bottom.tpl"}

