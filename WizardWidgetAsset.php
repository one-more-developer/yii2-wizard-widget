<?php
/**
 * @copyright Copyright &copy; A.F.Schuurman, 2015
 * @copyright Copyright &copy; ValianT, 2016
 * @package yii2-wizard-widget
 * @version 1.0.0
 */
namespace valiant\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for Wizard Widget
 *
 * @author A.F.Schuurman <andre.schuurman+yii2-wizardwidget@gmail.com>
 * @author ValianT <me.igor.prokofev@gmail.com>
 * @since 1.0
 */
class WizardWidgetAsset extends AssetBundle
{
	public $css = [
		'css/wizard-widget.css',
	];
	public $js = [
		'js/wizard-widget.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
	];

	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';

		parent::init();
	}
}