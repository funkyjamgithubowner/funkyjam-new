<div class="pager topthirty">
    <ol>
		<?php
		echo $this->Paginator->first('<<', array('tag' => 'li'));
		unset($this->request->params['paging']['Post']['options']['order']);
		echo $this->Paginator->numbers(array(
			'separator' => '',
			'currentTag' => 'a',
			'ellipsis' => false,
			'modulus' => 8,
			'currentClass' => 'active',
			'currentTag' => 'span',
			'tag' => 'li',
		));
		echo $this->Paginator->last('>>', array('tag' => 'li'));
		?>
    </ol>
</div>

