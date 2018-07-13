<?php
class View{
    function generate($content_view, $tamplate_view, $data = null){
        include 'application/views/'.$tamplate_view;
    }
}