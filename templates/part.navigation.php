<ul>
	<li>
		<input id="new-poll-name" class="add-poll" placeholder="<?php p($l->t('Poll Name')); ?>" type="text">
		<button id="add-poll" class="primary icon-checkmark-white"></button>
	</li>

	<script id="poll-template" type="text/x-handlebars-template">
		{{#each this}}
			<li id="poll-{{id}}" data-id="{{id}}">
				<a>{{name}}</a>
			</li>
		{{/each}}
	</script>
</ul>
