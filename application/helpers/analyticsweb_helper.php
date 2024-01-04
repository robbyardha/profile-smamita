<?php

function web_track_traffic()
{
    $lib_codeigniter = get_instance();


    date_default_timezone_set('Asia/Jakarta');
    $pageurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $datenow = date("Y-m-d");
    $timenow = date("H:i:s");
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $url = "http://www.geoplugin.net/json.gp?ip=" . $ip;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    $country = json_decode($resp);
    curl_close($curl);
    $country_name = $country->geoplugin_countryName;
    $country_code = $country->geoplugin_countryCode;
    // var_dump($resp);
    // var_dump($country->geoplugin_countryName);
    // var_dump($country->geoplugin_countryCode);
    // curl_close($curl);
    // var_dump($country);
    // var_dump(var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']))));


    // die;
    // var_dump($ip);

    // die;

    if ($country_code == NULL) {
        $country_code = "LOCALHOST";
    }

    if ($country_name == NULL) {
        $country_name = "LOCALHOST";
    }

    $client = $_SERVER['HTTP_USER_AGENT'];
    $operatingsystem = explode(";", $client)[1];

    $explode_client = explode(" ", $client);
    $browser = end($explode_client);
    // var_dump($browser);
    // die;
    $browsername = explode("/", $browser)[0];
    $browserversion = explode("/", $browser)[1];


    $lib_codeigniter->db->set('page_url', $pageurl);
    $lib_codeigniter->db->set('tanggal', $datenow);
    $lib_codeigniter->db->set('waktu', $timenow);
    $lib_codeigniter->db->set('ip_address', $ip);
    $lib_codeigniter->db->set('country', $country_name);
    $lib_codeigniter->db->set('country_code', $country_code);
    $lib_codeigniter->db->set('operating_system', $operatingsystem);
    $lib_codeigniter->db->set('browser', $browsername);
    $lib_codeigniter->db->set('browser_version', $browserversion);
    $lib_codeigniter->db->insert('analytics');

    // var_dump($lib_codeigniter->db->last_query());
    // die;
}

function analyze()
{
    $lib_codeigniter = get_instance();
    // $lib_codeigniter->db->select('*');
    // $lib_codeigniter->db->from('analytics');
    // $lib_codeigniter->db->order_by('created_date', 'DESC');
    // $query = $lib_codeigniter->db->get();
    // return $query->result_array();



    $query = "SELECT `tanggal`, COUNT(`tanggal`) AS total_tgl FROM `analytics` GROUP BY `tanggal`";
    $result_count = $lib_codeigniter->db->query($query);
    return $result_count->result_array();
}

function convertHtmlToText($text)
{
    require_once("./vendor/html2text/html2text/src/Html2Text.php");

    $html = new \Html2Text\Html2Text($text);
    $word = $html->getText();

    return $word;
}
