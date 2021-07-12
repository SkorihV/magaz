
<ul class="category-list">
    {foreach from=$categories item=category}
        <li><a href="/categories/view?id={$category.id}" class="link-item {if $current_category == $category.id}active{/if}">{$category.name}{$current_category}</a></li>
    {/foreach}
</ul>