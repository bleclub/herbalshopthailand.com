<?php

class database {

    var $con;

    function __construct() {
        $dbsql = array(
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
            'dbname' => 'herbalshop_db'
        );
        // $dbsql = array(
        //     'host' => 'localhost',
        //     'user' => 'tarnsilp_usr2',
        //     'pass' => '0ZxxCPJ8',
        //     'dbname' => 'tarnsilp_db2'
        // );
        $this->con = mysql_connect($dbsql['host'], $dbsql['user'], $dbsql['pass'], true) or die('Error connecting to MySQL');
        mysql_select_db($dbsql['dbname'], $this->con) or die('Database ' . $dbsql['dbname'] . ' does not exist!');
        mysql_query("SET NAMES UTF8");
    }

    function __destruct() {
        mysql_close($this->con);
    }

    function select($options) {
        $default = array(
            'table' => '',
            'fields' => '*',
            'condition' => '1=1',
            'order' => '1',
            'limit' => 1000
        );
        $options = array_merge($default, $options);
        $sql = "SELECT {$options['fields']} FROM {$options['table']} WHERE {$options['condition']} ORDER BY {$options['order']} LIMIT {$options['limit']}";
        return mysql_query($sql, $this->con);
    }

    function query($sql) {
        return mysql_query($sql,  $this->con);
    }

    function get($query) {
        return mysql_fetch_assoc($query);
    }

    function rows($query) {
        return mysql_num_rows($query);
    }

    function update($table = null, $array_of_values = array(), $conditions = 'FALSE') {
        if ($table === null || empty($array_of_values))
            return false;
        $what_to_set = array();
        foreach ($array_of_values as $field => $value) {
            if (is_array($value) && !empty($value[0]))
                $what_to_set[] = "`$field`='{$value[0]}'";
            else
                $what_to_set [] = "`$field`='" . mysql_real_escape_string($value, $this->con) . "'";
        }
        $what_to_set_string = implode(',', $what_to_set);
        return mysql_query("UPDATE $table SET $what_to_set_string WHERE $conditions", $this->con);
    }

    function insert($table = null, $array_of_values = array()) {
        if ($table === null || empty($array_of_values) || !is_array($array_of_values))
            return false;
        $fields = array();
        $values = array();
        foreach ($array_of_values as $id => $value) {
            $fields[] = $id;
            if (is_array($value) && !empty($value[0]))
                $values[] = $value[0];
            else
                $values[] = "'" . mysql_real_escape_string($value, $this->con) . "'";
        }
        $sql = "INSERT INTO $table (" . implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')';
        if (mysql_query($sql, $this->con))
            return mysql_insert_id($this->con);
        return false;
    }

    function realsql($unescaped_string) {
        return mysql_real_escape_string($unescaped_string);
    }

    function delete($table = null, $conditions = 'FALSE') {
        if ($table === null)
            return false;
        return mysql_query("DELETE FROM $table WHERE $conditions");
    }
    function insert_id(){
        return mysql_insert_id();
    }

    function free($query) {
        mysql_free_result($query);
    }

    function close() {
        mysql_close($this->con);
    }
}
