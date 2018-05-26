{if isset($cms_pages) && !empty($cms_pages)}
    <ul class="sidebar-menu">
        {foreach from=$cms_pages item=cmspage}
            <li>
                <a class="sidebar-menu__item {if $cmspage.id_cms == $cms->id} active {/if}" href="{$link->getCMSLink($cmspage.id_cms, $cmspage.link_rewrite)|escape:'html':'UTF-8'}">{$cmspage.meta_title|escape:'html':'UTF-8'}</a>
            </li>
        {/foreach}
    </ul>
{/if}