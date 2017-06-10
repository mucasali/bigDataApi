<?php

header('Access-Control-Allow-Origin=> *');
defined('BASEPATH') OR exit('No direct script access allowed');

class UserInfo extends CI_Controller {

	function __construct(){
			parent::__construct();
	}

 public function index(){
				$people = array(
					  "contributors_enabled"=>false,
					  "created_at"=>"Wed Jan 20 00:52:50 +0000 2010",
					  "default_profile"=>false,
					  "default_profile_image"=>false,
					  "description"=>"anak muda harapan bangsa",
					  "entities"=>[
					    "description"=>[
					      "urls"=>[]
					    ]
					  ],
					  "favourites_count"=>13,
					  "follow_request_sent"=>false,
					  "followers_count"=>387,
					  "following"=>false,
					  "friends_count"=>212,
					  "geo_enabled"=>true,
					  "has_extended_profile"=>true,
					  "id"=>106578146,
					  "id_str"=>"106578146",
					  "is_translation_enabled"=>false,
					  "is_translator"=>false,
					  "lang"=>"id",
					  "listed_count"=>0,
					  "location"=>"Padang",
					  "name"=>"Ega Rahmayandi",
					  "notifications"=>false,
					  "profile_background_color"=>"0B093B",
					  "profile_background_image_url"=>"http://pbs.twimg.com/profile_background_images/378800000031621776/cb15fce234e49149eb06060ded44e693.jpeg",
					  "profile_background_image_url_https"=>"https://pbs.twimg.com/profile_background_images/378800000031621776/cb15fce234e49149eb06060ded44e693.jpeg",
					  "profile_background_tile"=>true,
					  "profile_banner_url"=>"https://pbs.twimg.com/profile_banners/106578146/1382790066",
					  "profile_image_url"=>"http://pbs.twimg.com/profile_images/501397307116380160/x348eF-h_normal.jpeg",
					  "profile_image_url_https"=>"https://pbs.twimg.com/profile_images/501397307116380160/x348eF-h_normal.jpeg",
					  "profile_link_color"=>"76829E",
					  "profile_location"=>null,
					  "profile_sidebar_border_color"=>"FFFFFF",
					  "profile_sidebar_fill_color"=>"EFEFEF",
					  "profile_text_color"=>"333333",
					  "profile_use_background_image"=>true,
					  "protected"=>false,
					  "screen_name"=>"EggaaRy",
					  "status"=>[
					    "contributors"=>null,
					    "coordinates"=>null,
					    "created_at"=>"Sat Jun 03 23:47:43 +0000 2017",
					    "entities"=>[
					      "hashtags"=>[],
					      "symbols"=>[],
					      "urls"=>[
					        [
					          "display_url"=>"fllwrs.com",
					          "expanded_url"=>"http://fllwrs.com",
					          "indices"=>[
					            51,
					            74
					          ],
					          "url"=>"https://t.co/xszrkJO0Dz"
					        ]
					      ],
					      "user_mentions"=>[]
					    ],
					    "favorite_count"=>0,
					    "favorited"=>false,
					    "geo"=>null,
					    "id"=>871151440378695680,
					    "id_str"=>"871151440378695680",
					    "in_reply_to_screen_name"=>null,
					    "in_reply_to_status_id"=>null,
					    "in_reply_to_status_id_str"=>null,
					    "in_reply_to_user_id"=>null,
					    "in_reply_to_user_id_str"=>null,
					    "is_quote_status"=>false,
					    "lang"=>"en",
					    "place"=>null,
					    "possibly_sensitive"=>false,
					    "retweet_count"=>0,
					    "retweeted"=>false,
					    "source"=>"
					<a href=\"http://fllwrs.com\" rel=\"nofollow\">fllwrs</a>",
					    "text"=>"one person followed me // automatically checked by https://t.co/xszrkJO0Dz",
					    "truncated"=>false
					  ],
					  "statuses_count"=>7467,
					  "time_zone"=>"Pacific Time (US & Canada)",
					  "translator_type"=>"none",
					  "url"=>null,
					  "utc_offset"=>-25200,
					  "verified"=>false
				);
			header('Content-Type=> application/json');
			echo json_encode($people, JSON_PRETTY_PRINT);
  }

}
