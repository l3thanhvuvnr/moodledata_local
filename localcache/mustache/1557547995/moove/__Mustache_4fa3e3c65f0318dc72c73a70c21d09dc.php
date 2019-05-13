<?php

class __Mustache_4fa3e3c65f0318dc72c73a70c21d09dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page" class="container-fluid p-0">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_slideshow')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_tabscroll')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div style="padding: 2rem 1.6rem 0 1.4rem;">
';
        $buffer .= $indent . '    <h2 class="text-dark md-block" align="center"></h2>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_slidenews')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <h2 class="text-dark md-block font-weight-bold" align="center">KHÓA HỌC PHỔ BIẾN</h2>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_slidecourse')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <h2 class="text-dark md-block font-weight-bold" align="center">DIỄN ĐÀN THẢO LUẬN</h2>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_forum')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <h2 class="text-dark md-block font-weight-bold" align="center">KHÓA HỌC CỦA TÔI</h2>
';
        $buffer .= $indent . '    <div id="page-content" style="outline: none;">
';
        $buffer .= $indent . '        <div id="region-main-box">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <section id="region-main" style="overflow: unset;">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/fp_mycourse')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section14effe9713e59041d76feda62ee8bfc2($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    <div style="display:none">';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </section>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section14effe9713e59041d76feda62ee8bfc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="region_main_settings_menu_proxy"></div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
