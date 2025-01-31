<?php
namespace MohammadMohammadSoltani\PhpUrl;
class phpURL {
    public $error_reporting;
    public function __construct(bool $error_reporting = true) {
        $this->error_reporting = $error_reporting;
    }
    function check_url(string $url , bool $check_protecol = true){
        $special = false;
        $special_names = ["localhost"];
        foreach($special_names as $key){
            if(count(explode("." , $url)) < 2 &&  strpos($url , $key) !== false){
                $special = true;
                break;
            }
        }
        if (!$special && $check_protecol && count(explode("://" , $url) ) < 2){
            return false;
        }elseif(!$special && !$check_protecol && count(explode("." , $url) ) < 2){
            return false;
        }
        return true;
    }
    
    function get_protecol(string $url){
        if($this -> check_url($url)){
            return explode("://" , $url) [0];
        }
    }
    function get_domain_extension($url){
        if($this -> check_url($url)){
            if(count(explode("." , explode("/" , $url)[2])) >= 2){
                return explode("." , explode("/" , $url)[2])[count(explode("." , explode("/" , $url)[2])) - 1];
            }else{
                if($this -> error_reporting ) die ("ERROR : You Cant Get Domain pass of $url");
                return false;
            }
            
        }
    }
    function get_port(string $url){
        $parsed_url = parse_url($url);
        if (isset($parsed_url['port'])) {
            return $parsed_url['port'];
        }
                $protocol = $this->get_protecol($url);
        return $protocol === "http" ? 80 : ($protocol === "https" ? 443 : null);
    }
    function url_path_array(string $url){
        if($this -> check_url($url , false)){
            str_replace(["://" , ":///"] , ["" , ""] , $url);
            return array_slice(explode("/" , $url) , 1) ;
        }
    }
    function get_query(string $url){
        if(strpos($url , "?") != false){
            $data = explode("&" , explode("?" , $url)[1]);
            foreach($data as $key => $val) {
                $data[$key] = explode("=" , $val);
            }
            return $data;
        }
        
    }
}