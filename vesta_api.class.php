<?php
class VestaApi {
 
    public $vst_host;
    public $vst_user;
    public $vst_pass;
 
    function __construct($vst_host, $vst_user, $vst_pass){
        $this->host = $vst_host;
        $this->user = $vst_user;
        $this->pass = $vst_pass;
    }
 
    function add_user($login, $password, $email, $package, $first_name, $last_name, $returncode = 'yes'){
        $command = 'v-add-user';
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'returncode' => $returncode,
            'cmd' => $command,
            'arg1' => $login,
            'arg2' => $password,
            'arg3' => $email,
            'arg4' => $package,
            'arg5' => $fist_name,
            'arg6' => $last_name
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();   
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function add_domain($username, $domain, $returncode = 'yes'){
        $command = 'v-add-domain';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'returncode' => $returncode,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $domain
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function add_database($username, $db_name, $db_user, $db_pass, $returncode = 'yes'){
        $command = 'v-add-database';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'returncode' => $returncode,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $db_name,
            'arg3' => $db_user,
            'arg4' => $db_pass
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function user_info($username, $format = 'json'){
        $command = 'v-list-user';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $format
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function list_users($format = 'json'){
        $command = 'v-list-users';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'cmd' => $command,
            'arg1' => $format
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function user_domain_info($username, $domain, $format = 'json'){
        $command = 'v-list-web-domain';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function list_user_domains($username, $format = 'json'){
        $command = 'v-list-web-domains';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $format
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function del_user($username, $returncode = 'yes'){
        $command = 'v-delete-user';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'returncode' => $returncode,
            'cmd' => $command,
            'arg1' => $username
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function auth($login, $password, $returncode = 'yes'){
        $command = 'v-check-user-password';
        // Prepare POST query
        $postvars = array(
            'user' => $this->user,
            'password' => $this->pass,
            'cmd' => $command,
            'arg1' => $username,
            'arg2' => $password
        );
        $postdata = http_build_query($postvars);
 
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;
    }
 
    function cmd($postvars){
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->host . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
 
        return $answer;        
    }
}
?>
