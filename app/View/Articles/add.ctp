<script type="text/javascript" src="/mapyramide/js/ckeditor/ckeditor.js"></script>

<div id="bloc-editeur">
		<?php 
		    echo $this->Form->create('Article', array('action' => 'add')); 
		    echo $this->Form->input('title'); 
		    echo $this->Form->input('category_id'); 
		    echo $this->Form->input('content', array('cols' => '60', 'rows' => '3')); 
		    echo $this->Ck->load('Article.content'); 
		    echo $this->Form->input('id', array('type'=>'hidden'));  
		    echo $this->Form->end('Save Post'); 
		?> 
</div>