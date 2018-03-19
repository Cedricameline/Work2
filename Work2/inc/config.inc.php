<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author MSI
 */
class config {
    
    var $db_host;
    var $db_name;
    var $db_user;
    var $db_pass;
    
    function config(){
        $this->db_host="localhost";
        $this->db_name="U'teach";
        $this->db_user="root";
        $this->db_pass="";
    }
    
    function getdbhost() {
        return $this->db_host;
    }
    
    function getdbName() {
        return $this­>db_name;
    }
    
    function getdbuser() {
        return $this­>db_user;
    }
    function getdbpass() {
        return $this­>db_pass;
    }
    function testconnection() {
        $dbh=mysql_connect($this­>getdbhost(),$this­>getdbuser(),
        $this­>getdbpass());
        if ($dbh==false) {
            return false;
            }
        else {
            $dbh=mysql_select_db($this­>getdbname());
        if ($dbh==false) {
            return false;
            }
        else {
            return true;
            }
        }
    }
}
?>
