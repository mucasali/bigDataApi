<?php

header('Access-Control-Allow-Origin=>*');
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	function __construct(){
			parent::__construct();
	}

 public function index(){
			$people = array(
  [
    "work"=>[
      [
        "as"=>"Guru",
        "at"=>"Pendidikan Anak Usia Dini",
        "year"=>""
      ]
    ]
  ],
  [
    "education"=>[
      [
        "as"=>"Pascasarjana",
        "at"=>"S1 - Pendidikan Bahasa Ingris",
        "year"=>"Angkatan 2016"
      ],
      [
        "as"=>"IPA",
        "at"=>"SMA Negeri 1 Ciawi",
        "year"=>""
      ],
      [
        "as"=>"SMA",
        "at"=>"SMA Negeri 1 Ciawi",
        "year"=>""
      ]
    ]
  ],
  [
    "living"=>[
      [
        "at"=>"Kota Ciawi",
        "time"=>"Kota Saat Ini"
      ],
      [
        "at"=>"Kota Ciawi",
        "time"=>"Kota asal"
      ]
    ]
  ],
  [
    "contact-info"=>[
      [
        "type"=>"Facebook",
        "value"=>" /febi.sendirian"
      ]
    ]
  ],
  [
    "basic-info"=>[
      [
        "type"=>"Jenis Kelamin",
        "value"=>"Laki-laki"
      ],
      [
        "type"=>"Tertarik Pada",
        "value"=>"Perempuan"
      ],
      [
        "type"=>"Bahasa",
        "value"=>"Bahasa Inggris dan ' b IndOnesIa"
      ]
    ]
  ],
  [
    "relationship"=>[
      [
        "value"=>"Bertunangan sejak 2015"
      ]
    ]
  ],
  [
    "family"=>[]
  ],
  [
    "bio"=>[
      [
        "value"=>"Bec0me pers0n better than yesterday. . Make my parents happy n all people. . . Always l0ve Allah,"
      ]
    ]
  ],
  [
    "events"=>[
      [
        "event"=>"Lulus dari S1 - Pendidikan Bahasa Ingris",
        "year"=>"2016"
      ],
      [
        "event"=>"Bertunangan",
        "year"=>"2015"
      ],
      [
        "event"=>"Berpacaran",
        "year"=>"2013"
      ]
    ]
  ],
  [
    "quote"=>[
      [
        "value"=>"There is n0 r0se with0ut thorn,there is n0 r0yal road to success"
      ]
    ]
  ],
  [
    "photo"=>[
      "details"=>"https://m.facebook.com/febi.sendirian/photos?lst=100001605808113%3A100000303207105%3A1494382900&refid=8",
      "urls"=>[
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p100x100/12193757_1019672481386182_1614044263855505303_n.jpg?efg=eyJpIjoidCJ9&oh=3a5280bc0d27e86255ecc5a07d139a93&oe=59C26A64",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p100x100/11902235_986806554672775_7184061268999332058_n.jpg?efg=eyJpIjoidCJ9&oh=0de3ea88cb237b925397ff0fe5854c04&oe=59ADE6FC",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p100x100/11745944_968058866547544_1566943286412969323_n.jpg?efg=eyJpIjoidCJ9&oh=b51fad0cc71de843288ae6bc366deb74&oe=59B308D7",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p100x100/10351077_788470424506390_8976819431090695846_n.jpg?efg=eyJpIjoidCJ9&oh=b2157e59ca4b92a617e62d8100304ea7&oe=597481A1",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p100x100/10407366_758521390834627_5311821484745857661_n.jpg?efg=eyJpIjoidCJ9&oh=91880900e80d23fa759e6bdf3d033d44&oe=59C02D18",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c0.0.100.100/p100x100/1493219_688393681180732_1694325299_n.jpg?efg=eyJpIjoidCJ9&oh=470a57a837ef0bac37cb02f34f4b806f&oe=59BAAA0A",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c27.0.100.100/p100x100/1476159_673367026016731_1599446640_n.jpg?efg=eyJpIjoidCJ9&oh=709d77577172960d2bca613f9dad71a7&oe=5975EF85",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c0.13.100.100/p100x100/936582_673148799371887_1385561845_n.jpg?efg=eyJpIjoidCJ9&oh=60126b7910a88aeb798b0cf016fdd394&oe=597AEE6E",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c0.0.100.100/p100x100/1454828_671440912876009_676619306_n.jpg?efg=eyJpIjoidCJ9&oh=9d2a5d103a409525238e108cce68a013&oe=59B6D171",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c17.0.100.100/p100x100/1476489_671440546209379_1163439035_n.jpg?efg=eyJpIjoidCJ9&oh=9fa99b4ce3c73fef5a5885fba920e2f6&oe=59B6F8FE",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c0.0.100.100/p100x100/1460113_664011246952309_1946358129_n.jpg?efg=eyJpIjoidCJ9&oh=4bd99dd95855f2cd40aa9d879dd12e68&oe=597A9B37",
        "https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/c6.0.100.100/p100x100/1467352_663989856954448_723838385_n.jpg?efg=eyJpIjoidCJ9&oh=d87c837f027293ba2808f83976236fb8&oe=59AE4881"
      ]
    ]
  ],
  [
    "friends"=>[
      "detail"=>"https://m.facebook.com/febi.sendirian/friends?lst=100001605808113%3A100000303207105%3A1494382900&refid=8",
      "friends"=>[
					[
				    "name"=>"Khoirul Mustofa",
				    "picture"=>"https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p148x148/16427378_638934979623772_7756583435982768285_n.jpg?efg=eyJpIjoidCJ9&oh=c76aae5f4e41e9278e9aac68c4e59a41&oe=59990586",
				    "url"=>"https://m.facebook.com/profile.php?id=100005218279205"
				  ],
				  [
				    "name"=>"Eko Castello",
				    "picture"=>"https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p148x148/17264164_1897472887199505_5098632019817137853_n.jpg?efg=eyJpIjoidCJ9&oh=a6850fed469b480b3408b64584377a56&oe=594EF015",
				    "url"=>"https://m.facebook.com/eko.nopita.3"
				  ],
				  [
				    "name"=>"Adrae Bayu",
				    "picture"=>"https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p148x148/14390837_237323156684933_8268818204340324464_n.jpg?efg=eyJpIjoidCJ9&oh=fb350f6587bc850d1e368ec09019ea06&oe=598A1504",
				    "url"=>"https://m.facebook.com/adrae.bayu"
				  ]
				]
    ]
  ]

			);
			header('Content-Type=>application/json');
			sleep(5);
			echo json_encode($people, JSON_PRETTY_PRINT);
  }

	public function reCaptcha(){
		$this->load->library('recaptcha');
		echo $this->recaptcha->render();
	}



}
