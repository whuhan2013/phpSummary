<?php
//类别在数据库中是如何存放的
array(
   array(
   	"cat_id" => 1,
   	"cat_name" => "男女服装",
   	"parent_id" => 0
   	),
   array(
   	"cat_id" => 2,
   	"cat_name" => "男装",
   	"parent_id" => 1
   	),
   array(
   	"cat_id" =>3,
   	"cat_name" => "女装",
   	"parent_id" =>1
   	),
   array(
   	"cat_id" => 4,
   	"cat_name" => "鞋包配饰",
   	"parent_id" => 0
   	),
);

//我们应该得到这样的一种结构，肯定是有层次的，多维数组
array(
	 array(
   		"cat_id" => 1,
   		"cat_name" => "男女服装",
   		"parent_id" => 0,
   		"child" => array(
   			array(
   				"cat_id" => 2,
   				"cat_name" => "男装",
   				"parent_id" => 1,
   				"child" => array(
   					array(
   						"cat_id" => 10,
   						"cat_name" => "衬衣",
   						"parent_id" => 2,
   					),
   					array(
   						"cat_id" => 12,
   						"cat_name" => "短裤",
   						"parent_id" => 2,
   					)
   				)
   			),
   			array(
   				"cat_id" => 3,
   				"cat_name" => "女装",
   				"parent_id" => 1
   			)
   		)
   	),
	array(
   		"cat_id" => 4,
   		"cat_name" => "鞋包配饰",
   		"parent_id" => 0
   	),
);