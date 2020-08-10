<?php
/*
Plugin Name: LightVersion
Description: Adding buttons of differents services like VK, FB and etc
*/
namespace lightversion;
 
use phpmock\phpunit\PHPMock;

// adding filter

class lightversion { 

public function__construct() {

add_filter( 'the_content', [$this,'yandexshare_run'] );


}

// functions adds buttons before a post
function LightVersion_run($content) {
    // code from the page https://tech.yandex.ru/share/
    $data = '
        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter"></div>
    ';
    
    // return the old and new data
    return $data . $content;
}
}