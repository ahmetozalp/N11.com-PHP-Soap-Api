<?php
	include "n11.class.php";
	$n11Params = [
		'appKey' => 'API_BILGILERINIZDEN_DOLDURUN',
        'appSecret' => 'API_BILGILERINIZDEN_DOLDURUN'
	];
	
	$n11 = new N11($n11Params);
	

	$categories = $n11->GetTopLevelCategories();
	var_dump($categories);
	
	//* N11 Şehir Bilgileri
	$cities = $n11->GetCities();
	var_dump($cities);

	//* N11 Ürün Listesini Çekme
	$productList = $n11->GetProductList(5, 0);
	var_dump($productList);
	
	//* N11 Kayıtlı Ürünü Çekme
	$getProductBySeller = $n11->GetProductBySellerCode('db0000');
	var_dump($getProductBySeller);
	
	//*N11 Ürün Kaydetme
	$saveProduct = $n11->SaveProduct(
                [
                    'productSellerCode' => 'az32897591',
                    'title' => 'Deneme üründür satın almayınız.',
                    'subtitle' => 'Api Test ürünü ',
                    'description' => 'Deneme  ürünümüz.',
                    'attributes' =>
                    [
                        'attribute' => Array()
                    ],
                    'category' =>
                    [
                        'id' => 1000038
                    ],
                    'price' => 0.99,
                    'currencyType' => 'TL',
                    'images' =>
                    [
                        'image' =>
                        [
                            'url' => 'http://alyamedya.com/uploads/alya-medya-logo1.png',
                            'order' => 1
                        ]
                    ],
                    'saleStartDate' => '',
                    'saleEndDate' => '',
                    'productionDate' => '',
                    'expirationDate' => '',
                    'productCondition' => '1',
                    'preparingDay' => '3',
                    'discount' => 10,
                    'shipmentTemplate' => 'Alıcı Öder',
                    'stockItems' =>
                    [
                        'stockItem' =>
                        [
                            'quantity' => 1,
                            'sellerStockCode' => 'stokkodu',
                            'attributes' =>
                            [
                                'attribute' => []
                            ],
                            'optionPrice' => 0.99
                        ]
                    ]
                ]
	);
	var_dump($saveProduct);
	
	
	//* N11 Ürün Silme
	$deleteProductBySeller = $n11->DeleteProductBySellerCode('az3289759');
	var_dump($deleteProductBySeller);
	
	//* N11 Sipariş Listesi
	$OrderList  = $n11->OrderList (
	[
		"productId"=>'',
		"status"=> 'New', 
		"buyerName"=> '',
		"orderNumber"=> '',
		"productSellerCode" =>'',
		"recipient"=> '',
		"period"=>[
			"startDate"=> '?',
			"endDate"=> '?'     
		]     
	]                
	);
	var_dump($orderList);
	
?>