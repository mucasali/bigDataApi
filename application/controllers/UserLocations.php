<?php

header('Access-Control-Allow-Origin=>*');
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLocations extends CI_Controller {

	function __construct(){
			parent::__construct();
	}

 public function index(){
				$people = array(
[
"createAt"=>"Thu Mar 24 14:06:16 +0000 2016",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.072879,
					-7.211295
				],
				[
					108.171951,
					-7.211295
				],
				[
					108.171951,
					-7.088319
				],
				[
					108.072879,
					-7.088319
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Ciawi, Indonesia",
	"id"=>"931d476c6924e9fd",
	"name"=>"Ciawi",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/931d476c6924e9fd.json"
]
],
[
"createAt"=>"Thu Sep 10 14:29:22 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.468853,
					-7.01782
				],
				[
					108.523927,
					-7.01782
				],
				[
					108.523927,
					-6.952291
				],
				[
					108.468853,
					-6.952291
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Kuningan, Indonesia",
	"id"=>"447553a050a49d11",
	"name"=>"Kuningan",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/447553a050a49d11.json"
]
],
[
"createAt"=>"Mon Sep 07 11:17:49 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.468853,
					-7.01782
				],
				[
					108.523927,
					-7.01782
				],
				[
					108.523927,
					-6.952291
				],
				[
					108.468853,
					-6.952291
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Kuningan, Indonesia",
	"id"=>"447553a050a49d11",
	"name"=>"Kuningan",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/447553a050a49d11.json"
]
],
[
"createAt"=>"Mon Jun 15 23:45:50 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					107.363908,
					-6.935419
				],
				[
					107.5382,
					-6.935419
				],
				[
					107.5382,
					-6.859173
				],
				[
					107.363908,
					-6.859173
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Batujajar, Indonesia",
	"id"=>"1798b59c61cc1381",
	"name"=>"Batujajar",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/1798b59c61cc1381.json"
]
],
[
"createAt"=>"Sun Jun 14 00:01:16 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					107.363908,
					-6.935419
				],
				[
					107.5382,
					-6.935419
				],
				[
					107.5382,
					-6.859173
				],
				[
					107.363908,
					-6.859173
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Batujajar, Indonesia",
	"id"=>"1798b59c61cc1381",
	"name"=>"Batujajar",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/1798b59c61cc1381.json"
]
],
[
"createAt"=>"Mon Mar 23 10:21:08 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.072879,
					-7.211295
				],
				[
					108.171951,
					-7.211295
				],
				[
					108.171951,
					-7.088319
				],
				[
					108.072879,
					-7.088319
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Ciawi, Indonesia",
	"id"=>"931d476c6924e9fd",
	"name"=>"Ciawi",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/931d476c6924e9fd.json"
]
],
[
"createAt"=>"Mon Jan 19 00:15:34 +0000 2015",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					107.630105,
					-6.9134797
				],
				[
					107.6656504,
					-6.9134797
				],
				[
					107.6656504,
					-6.8836352
				],
				[
					107.630105,
					-6.8836352
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Cibeunying Kidul, Indonesia",
	"id"=>"2d8ffa83ff4be24e",
	"name"=>"Cibeunying Kidul",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/2d8ffa83ff4be24e.json"
]
],
[
"createAt"=>"Thu Nov 06 01:26:03 +0000 2014",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.072879,
					-7.211295
				],
				[
					108.171951,
					-7.211295
				],
				[
					108.171951,
					-7.088319
				],
				[
					108.072879,
					-7.088319
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Ciawi, Indonesia",
	"id"=>"931d476c6924e9fd",
	"name"=>"Ciawi",
	"place_type"=>"city",
	"url"=>"https://api.twitter.com/1.1/geo/id/931d476c6924e9fd.json"
]
],
[
"createAt"=>"Fri Aug 22 01:13:50 +0000 2014",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.059236,
					-7.447599
				],
				[
					108.299483,
					-7.447599
				],
				[
					108.299483,
					-7.243571
				],
				[
					108.059236,
					-7.243571
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Kota Tasikmalaya, Jawa Barat",
	"id"=>"f2adf41a6233ebea",
	"name"=>"Kota Tasikmalaya",
	"place_type"=>"admin",
	"url"=>"https://api.twitter.com/1.1/geo/id/f2adf41a6233ebea.json"
]
],
[
"createAt"=>"Fri Aug 22 01:10:34 +0000 2014",
"location"=>[
	"attributes"=>[],
	"bounding_box"=>[
		"coordinates"=>[
			[
				[
					108.059236,
					-7.447599
				],
				[
					108.299483,
					-7.447599
				],
				[
					108.299483,
					-7.243571
				],
				[
					108.059236,
					-7.243571
				]
			]
		],
		"type"=>"Polygon"
	],
	"contained_within"=>[],
	"country"=>"Indonesia",
	"country_code"=>"ID",
	"full_name"=>"Kota Tasikmalaya, Jawa Barat",
	"id"=>"f2adf41a6233ebea",
	"name"=>"Kota Tasikmalaya",
	"place_type"=>"admin",
	"url"=>"https://api.twitter.com/1.1/geo/id/f2adf41a6233ebea.json"
]
]


			);
			header('Content-Type=>application/json');

			sleep(7);
			echo json_encode($people, JSON_PRETTY_PRINT);
  }



}
