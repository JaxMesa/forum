<?php
    // Shows code 404 "Page not found".
    function abort() {
        http_response_code(404);
        // Add some beautiful page for 404 error :)
        die();
    }
?>