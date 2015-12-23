<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class NewsController extends Controller
{

	public function actionIndex()
	{
		echo "this is my first controller";
	}
	public function getData()
	{

		$newsList = [
			['title'=>'First WW', 'date'=>'1914-07-28'],
			['title'=>'Second WW', 'date'=>'1939-09-01'],
			['title'=>'First man on the moon', 'date'=>'1969-07-20']
		     ];

		return $newsList;
	}
	public function actionItemsList()
	{
		$newsList = $this->getData();
		return $this->render('itemsList', ['newsList'=>$newsList]);

	}
}

