<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15.09.14
 * Time: 17:12
 */

class login extends Controller {
    public $requires_auth = true;
    function index() { header('Location: '.BASE_URL); } }
?>
