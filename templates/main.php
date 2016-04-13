<?php
/**
 * @var OCP\Template $this
 * @var array $_
 */

?>

<div id="app">
	<div id="app-content">
        <div id="app-content-error"></div>
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.content')); ?>

			<?php echo $this->inc('part.loader');?>
		</div>
	</div>
    <div id="app-sidebar" class="disappear">
		<?php print_unescaped($this->inc('part.sidebar')); ?>
	</div>
</div>
