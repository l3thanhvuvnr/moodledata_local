<?php

class __Mustache_a0b6ae075abc3ec26b4beb99b3bc000c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="card">
';
        $buffer .= $indent . '<div class="container p-1">
';
        $buffer .= $indent . '      <div class="row mx-lg-n5 pb-3 pt-3">
';
        $buffer .= $indent . '        <div class="col-12 col-lg-4 px-lg-5 "><button type="button" class="btn btn-warning wrn-btn rounded p-3 pr-5 pl-5 w-100" onclick="$(\'#newslider\')[0].focus()">TIN TỨC</button></div>
';
        $buffer .= $indent . '        <div class="col-12 col-lg-4 px-lg-5"><button type="button" class="btn btn-primary wrn-btn rounded p-3 pr-5 pl-5 w-100" onclick="$(\'#courseslider\')[0].focus()">KHÓA HỌC</button></div>
';
        $buffer .= $indent . '        <div class="col-12 col-lg-4 px-lg-5"><button type="button" class="btn btn-danger wrn-btn rounded p-3 pr-5 pl-5 w-100" onclick="$(\'#mydiscussion\')[0].focus()">DIỄN ĐÀN</button></div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
