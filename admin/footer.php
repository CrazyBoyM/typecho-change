<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
    </body>
<div class="logo"><a href="<?php $options->adminUrl(''); ?>">个人中心</a></div>
</html>
<script src="p.js"></script>

<?php
/** 注册一个结束插件 */
Typecho_Plugin::factory('admin/footer.php')->end();
