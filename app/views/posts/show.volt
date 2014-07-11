{{content()}}

{#app/views/posts/show.volt	#}
<div class="post">
	<?php var_dump($posts) ;?>
	<h3>{{ title }}</h3>
	<p>
		{{ body }}
	</p>
</div>