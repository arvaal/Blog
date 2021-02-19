<?php

namespace Views;

class View {
    private $template;
    
    public function __construct(string $templatePath) {
        $this->template = $templatePath;
    }
    
    public function render(string $template, array $vars = []) {
        extract($vars);
        
        ob_start();
        
        include $this->template . '/' . $template;
        
        $buffer = ob_get_contents();
        
        ob_get_clean();
        
        echo $buffer;
    }
}
    