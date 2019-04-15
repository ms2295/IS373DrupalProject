<!-- start page.tpl.php template -->
<?php if($messages): ?>
    <div id="messages">
        <div class="section clearfix">
            <?php print $messages; ?>
        </div>
    </div>
<?php endif; ?>
<?php print render($page['content']); ?>
<?php
$searchBlock = module_invoke('search', 'block_view', 'search');
print render($searchBlock['content']);
?>

<?php
$mpnBlock = module_invoke('menu', 'block_view', 'navigation');
print render($mpnBlock['content']);
?>

<?php print render($myModuleForm); ?>
<!-- end page.tpl.php template -->