<footer>
  <div class="box8">
    <div class="box8-1">
      <p class="copy">Copyright © 2018 MATSURI PLUS All Rights Reserved</p>
      {if !empty($authority)}
        {if $authority == 'manager'}
        <a href="{$SCRIPT_NAME}?type=editer">編集者画面</a>
        <a href="{$SCRIPT_NAME}?type=manager">管理者画面</a>
        {elseif $authority == 'editer'}
        <a href="{$SCRIPT_NAME}?type=editer">編集者画面</a>
        {/if}
      {/if}
    </div>
  </div>
</footer>

{if !empty($debug_str)}
<pre>{$debug_str}</pre>
{/if}