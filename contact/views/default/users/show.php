<div class="sidebar"><br />
<a class="featured" href="/users/add">添加用户</a>
</div>

<h1>用户</h1>
<p>
    添加, 编辑 or 删除 users of the Contact System here.
</p>
<table>
<tr>
<th>用户名</th>
<th>是否管理员</th>
<th></th>
<th></th>
</tr>
<?php 
foreach ($view['users'] as $user) {
    echo view::show('users/row', array('user'=>$user));
}
?>
</table>
<script type="text/javascript" src="/assets/removal.js"></script>
