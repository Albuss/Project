<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()
	{

        echo "NeewsController - index";

		return true;
	}

	public function actionView($id)
	{

	    echo "NeewsController - index";

		return true;

	}

}

