<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class LdapAC{
    private $dn;
    private $conn;
    private $ldapConfig = [
    'host' => 'ldap://localhost',
    'port' => '389',
    'root' => 'dc=dawAC,dc=cat',
    'alumnesAC' => 'cn=alumnesAC,ou=grups,dc=dawAC,dc=cat',
    'professorsAC' => 'cn=professorsAC,ou=grups,dc=dawAC,dc=cat',
        'adminAuthData' => [
            'dn' => 'cn=admin,dc=dawAC,dc=cat',
            'user' => 'admin',
        ]
    ];

    public function __construct($userDn = null)
    {
        $this->conn = ldap_connect($this->ldapConfig['host'],$this->ldapConfig['port']);
        ldap_set_option($this->conn,LDAP_OPT_PROTOCOL_VERSION,3);
        if($userDn != null){
            $this->dn = $userDn;
        }

    }
    

    public function authUser($pass , $authDn = null)
    {
        if($authDn == null){
            $authDn = $this->getDn();
        }

        $authenticated = false;

        if($pass != null){
            if(ldap_bind($this->conn , $authDn , $pass)){
                $authenticated = true;
            }
        }
        return $authenticated;
    }

    function search($whereClause,$group){
        if($whereClause == ''){
            $whereClause = '()';
        }
        switch ($group){
            case 'professorsAC' :
                $base = $this->ldapConfig['professorsAC'];
                break;
            case 'alumnesAC' :
                $base = $this->ldapConfig['alumnesAC'];
                break;
            case '*' :
                $base = $this->ldapConfig['root'];
                break;
        }

        $query = ldap_search($this->conn , $base , $whereClause);
        if(!empty($query)){
            return ldap_get_entries($this->conn , $query);
        }else{
            return null;
        }
    }

    public function getDn()
    {
        return $this->dn;
    }

    public function setDn($dn)
    {
        $this->dn = $dn;
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    public function getLdapConfig()
    {
        return $this->ldapConfig;
    }

    public function setLdapConfig($ldapConfig)
    {
        $this->ldapConfig = $ldapConfig;
    }

}
?>