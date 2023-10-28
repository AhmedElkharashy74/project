<?php
function view($viewName, $data = []) {
    $viewFile = 'view/' . $viewName . '.php';

    if (file_exists($viewFile)) {
        extract($data);
        
        ob_start();
        include $viewFile;
        $content = ob_get_clean();
        
        echo $content;
    } else {
        echo "View not found: $viewName";
    }
}
