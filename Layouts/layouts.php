<?php
class layouts{
    public function heading() {
       print "<h1>Hello world Welcome to BBIT</h1>";
    }
    public function footer($conf) {
       print "<footer>&copy;" .date("Y"). " {$conf['site_name']}.  All rights reserved.
       </footer>";
    }


}