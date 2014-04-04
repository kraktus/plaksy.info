<?php
/**
* @package   Capture
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body class="<?php echo $this['config']->get('body_classes'); ?>">

		<?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
		<div class="tm-block tm-block-light tm-toolbar uk-clearfix uk-hidden-small">
			<div class="uk-container uk-container-center">

				<?php if ($this['widgets']->count('toolbar-l')) : ?>
				<div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('toolbar-r')) : ?>
				<div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
				<?php endif; ?>

			</div>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('logo + headerbar + menu + search')) : ?>
		<div class="tm-block tm-headerbar uk-clearfix <?php echo $slant_classes['headerbar']; ?>">
			<div class="uk-container uk-container-center">

				<?php if ($this['widgets']->count('logo')) : ?>
				<a class="uk-navbar-brand uk-hidden-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
				<?php endif; ?>

				<?php echo $this['widgets']->render('headerbar'); ?>

				<?php if ($this['widgets']->count('search')) : ?>
				<div class="uk-navbar-flip">
					<div class="uk-navbar-content uk-visible-large"><?php echo $this['widgets']->render('search'); ?></div>
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('menu')) : ?>
				<div class="uk-navbar-flip uk-hidden-small">
					<?php echo $this['widgets']->render('menu'); ?>
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('offcanvas')) : ?>
				<a href="#offcanvas" class="uk-navbar-toggle uk-navbar-flip uk-visible-small" data-uk-offcanvas></a>
				<?php endif; ?>

				<?php if ($this['widgets']->count('logo-small')) : ?>
				<div class="uk-navbar-brand uk-visible-small"><a class="tm-logo-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a></div>
				<?php endif; ?>

			</div>
			<div class="tm-slant-block-bottom"></div>
		</div>
		<?php endif; ?>

		<?php if ($this['config']->get('parallax_top_position')) : ?>
		<div class="tm-block <?php echo $slant_classes['top-parallax']; ?>">
			<section class="top-parallax">
		        <?php echo $this['widgets']->render('top-parallax', array('layout'=>$this['config']->get(
		        'grid.top-parallax.layout'))); ?>
		    </section>
		</div>
		<?php endif;?>
		<?php //$captu = 'PGRpdiBpZD0iY2FwdHUiPgo8YSBocmVmPSJodHRwOi8vYWxsNHBkYS5vcmciIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0i0LjQs9GA0Ysg0LTQu9GPINGB0LzQsNGA0YLRhNC+0L3QvtCyINCx0LXRgdC/0LvQsNGC0L3QviI+0LjQs9GA0Ysg0LTQu9GPINGB0LzQsNGA0YLRhNC+0L3QvtCyINCx0LXRgdC/0LvQsNGC0L3QvjwvYT4KPC9kaXY+'; echo base64_decode($captu);?>
		<?php if ($this['widgets']->count('top-a')) : ?>
		<div class=" tm-block <?php echo $block_classes['top-a'], $slant_classes['top-a']; ?>">
			<div class="uk-container uk-container-center">
				<section class="<?php echo $grid_classes['top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?></section>
			</div>
			<?php if (!empty($slant_classes['top-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
			<?php if (!empty($slant_classes['top-a'])) : ?><div class="tm-slant-block-bottom"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('top-b')) : ?>
		<div class="tm-block <?php echo $block_classes['top-b'], $slant_classes['top-b']; ?>">
			<div class="uk-container uk-container-center">
				<section class="<?php echo $grid_classes['top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?></section>
			</div>
			<?php if (!empty($slant_classes['top-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
			<?php if (!empty($slant_classes['top-b'])) : ?><div class="tm-slant-block-bottom"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
		<div class="tm-block <?php echo $block_classes['main'], $slant_classes['main']; ?>">
			<div class="uk-container uk-container-center">

				<?php if ($this['config']->get('system_output', true)) : ?>
				<div class="tm-breadcrumb">

					<?php if ($this['widgets']->count('breadcrumbs')) : ?>
					<?php echo $this['widgets']->render('breadcrumbs'); ?>
					<?php endif; ?>
					<?php //$captu = 'PGRpdiBpZD0iY2FwdHUiPgo8YSBocmVmPSJodHRwOi8veW91cmRldmljZS5vcmciIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0ieGlhb21pIG1pMyDQvtCx0LfQvtGAIj54aWFvbWkgbWkzINC+0LHQt9C+0YA8L2E+CjwvZGl2Pg=='; echo base64_decode($captu);?>
				</div>
				<?php endif; ?>

				<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>

					<?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
					<div class="<?php echo $columns['main']['class'] ?>">

						<?php if ($this['widgets']->count('main-top')) : ?>
						<section class="<?php echo $grid_classes['main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></section>
						<?php endif; ?>

						<?php if ($this['config']->get('system_output', true)) : ?>
						<main class="tm-content">

							<?php echo $this['template']->render('content'); ?>

						</main>
						<?php endif; ?>

						<?php if ($this['widgets']->count('main-bottom')) : ?>
						<section class="<?php echo $grid_classes['main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></section>
						<?php endif; ?>

					</div>
					<?php endif; ?>

		            <?php foreach($columns as $name => &$column) : ?>
		            <?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
		            <aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
		            <?php endif ?>
		            <?php endforeach ?>

				</div>
			</div>
			<?php if (!empty($slant_classes['top-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
			<?php if (!empty($slant_classes['main'])) : ?><div class="tm-slant-block-bottom"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('bottom-a')) : ?>
		<div class="tm-block <?php echo $block_classes['bottom-a'], $slant_classes['bottom-a']; ?>">
			<div class="uk-container uk-container-center">
				<section class="<?php echo $grid_classes['bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?></section>
			</div>
			<?php if (!empty($slant_classes['top-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
			<?php if (!empty($slant_classes['bottom-a'])) : ?><div class="tm-slant-block-bottom"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['config']->get('parallax_bottom_position')) : ?>
		<div class="tm-block <?php echo $slant_classes['bottom-parallax']; ?>">
			<section class="bottom-parallax">
		        <?php echo $this['widgets']->render('bottom-parallax', array('layout'=>$this['config']->get(
		        'grid.bottom-parallax.layout'))); ?>
		    </section>
		</div>
		<?php endif;?>

		<?php if ($this['widgets']->count('bottom-b')) : ?>
		<div class="tm-block <?php echo $block_classes['bottom-b'], $slant_classes['bottom-b']; ?>">
			<div class="uk-container uk-container-center">
				<section class="<?php echo $grid_classes['bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?></section>
			</div>
			<?php if (!empty($slant_classes['bottom-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
			<?php if (!empty($slant_classes['bottom-b'])) : ?><div class="tm-slant-block-bottom"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('bottom-c')) : ?>
		<div class="tm-block tm-block-dark uk-panel-box-secondary">
			<div class="uk-container uk-container-center">
				<section class="<?php echo $grid_classes['bottom-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?></section>
			</div>
		<?php if (!empty($slant_classes['bottom-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
		<div class="tm-block tm-block-dark">
			<div class="uk-container uk-container-center">
				<footer class="tm-footer uk-text-center">

					<?php if ($this['config']->get('totop_scroller', true)) : ?>
					<p><a class="tm-totop-scroller uk-margin-bottom" data-uk-smooth-scroll href="#"></a></p>
					<?php endif; ?>

					<?php
						echo $this['widgets']->render('footer');
						// $this->output('warp_branding');
						echo $this['widgets']->render('debug');
					?>
					<?php //$captu = 'PGRpdiBpZD0iY2FwdHUiPgo8YSBocmVmPSJodHRwOi8vc21hcnQyNC5jb20udWEiIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0i0LrRg9C/0LjRgtGMINC60LjRgtCw0LnRgdC60LjQuSDRgtC10LvQtdGE0L7QvSI+0LrRg9C/0LjRgtGMINC60LjRgtCw0LnRgdC60LjQuSDRgtC10LvQtdGE0L7QvTwvYT4KPC9kaXY+'; echo base64_decode($captu);?>
				</footer>
			</div>
		<?php if (!empty($slant_classes['bottom-parallax'])) : ?><div class="tm-slant-block-top"></div><?php endif; ?>
		</div>
		<?php endif; ?>

	<?php echo $this->render('footer'); ?>

	<?php if ($this['widgets']->count('offcanvas')) : ?>
	<div id="offcanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
	</div>
	<?php endif; ?>

</body>
</html>