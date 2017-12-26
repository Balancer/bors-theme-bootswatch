<?php

namespace B2\Theme\Bootswatch;

class Slate  extends \B2\Theme\Bootstrap3
{
	function pre_show()
	{
		if(empty(\bors::$bower_asset_packages['bower-asset/bootswatch']))
		{
			bors_use('https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/slate/bootstrap.min.css');
		}
		else
		{
			bors_use(\B2\cfg('bower-asset.path', '/bower-asset').'/bootswatch/slate/bootstrap.min.css');
		}

		return parent::pre_show();
	}
}
