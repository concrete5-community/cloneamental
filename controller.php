<?php
namespace Concrete\Package\Cloneamental;

use Package;
use PageTheme;

class Controller extends Package
{

	protected $pkgHandle = 'cloneamental';
	protected $appVersionRequired = '5.7.5.2';
	protected $pkgVersion = '0.9.3';

	public function getPackageDescription()
	{
		return t('An editable packaged copy of the default Elemental theme.');
	}

	public function getPackageName()
	{
		return t('Cloneamental');
	}

	public function install()
	{
		$pkg = parent::install();
		PageTheme::add('cloneamental', $pkg);
	}

}