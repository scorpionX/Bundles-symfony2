<?php

namespace TemplateVTT\UtilsBundle\Libraries;

class BreadsCrumb {

    private $_itens = array();

    public function addItem($text, $url = 'javascript:void(0)') {
        $this->_itens[] = (object) array('url' => $url, 'text' => $text);
        
        return $this;
    }

    public function show() {
        return $this->_itens;
    }

}
