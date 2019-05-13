<?php

class __Mustache_475bdaec09b1c5c3049913caab3653a4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'active' section
        $value = $context->find('active');
        $buffer .= $this->section0742b3d101b395b3fc1d3e653b833f2b($context, $indent, $value);
        // 'active' inverted section
        $value = $context->find('active');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
            // 'settingsmenu' section
            $value = $context->find('settingsmenu');
            $buffer .= $this->sectionA6a306e277bb90699de7e22eefed1e13($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
        }

        return $buffer;
    }

    private function section446f2f0f1f6278552603e169707d2bfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="mr-auto">
                        {{{contextheader}}}
                    </div>
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
                
                $buffer .= $indent . '                    <div class="mr-auto">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6a652d5f0fc2c59def1a9624125131b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="setting-context">
                        <div class="context-header-settings-menu" style="z-index: 100000;">
                            {{{settingsmenu}}}
                        </div>
                    </div>
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
                
                $buffer .= $indent . '                    <div id="setting-context">
';
                $buffer .= $indent . '                        <div class="context-header-settings-menu" style="z-index: 100000;">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf925dc793f08410de325fe96872767(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
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
                
                $buffer .= $indent . '                    <div id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0742b3d101b395b3fc1d3e653b833f2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<header id="page-header" class="row">
    <div class="col-12 pt-1 pb-1">
        <div class="card {{^contextheader}}border-0 bg-transparent{{/contextheader}}">
            <div class="card-body {{^contextheader}}p-2{{/contextheader}}">
                <div class="d-flex">
                    {{#contextheader}}
                    <div class="mr-auto">
                        {{{contextheader}}}
                    </div>
                    {{/contextheader}}

                    {{#settingsmenu}}
                    <div id="setting-context">
                        <div class="context-header-settings-menu" style="z-index: 100000;">
                            {{{settingsmenu}}}
                        </div>
                    </div>
                    {{/settingsmenu}}
                </div>
                <div class="d-flex flex-wrap">

                    {{#hasnavbar}}
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                    {{/hasnavbar}}
                    <div class="ml-auto d-flex">
                        {{{pageheadingbutton}}}
                    </div>
                    <div id="course-header">
                        {{{courseheader}}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
                
                $buffer .= $indent . '<header id="page-header" class="row">
';
                $buffer .= $indent . '    <div class="col-12 pt-1 pb-1">
';
                $buffer .= $indent . '        <div class="card ';
                // 'contextheader' inverted section
                $value = $context->find('contextheader');
                if (empty($value)) {
                    
                    $buffer .= 'border-0 bg-transparent';
                }
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="card-body ';
                // 'contextheader' inverted section
                $value = $context->find('contextheader');
                if (empty($value)) {
                    
                    $buffer .= 'p-2';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="d-flex">
';
                // 'contextheader' section
                $value = $context->find('contextheader');
                $buffer .= $this->section446f2f0f1f6278552603e169707d2bfb($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'settingsmenu' section
                $value = $context->find('settingsmenu');
                $buffer .= $this->sectionA6a652d5f0fc2c59def1a9624125131b($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="d-flex flex-wrap">
';
                $buffer .= $indent . '
';
                // 'hasnavbar' section
                $value = $context->find('hasnavbar');
                $buffer .= $this->section3cf925dc793f08410de325fe96872767($context, $indent, $value);
                $buffer .= $indent . '                    <div class="ml-auto d-flex">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div id="course-header">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</header>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6a306e277bb90699de7e22eefed1e13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="setting-context">
        <div class="context-header-settings-menu">
            {{{settingsmenu}}}
        </div>
    </div>
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
                
                $buffer .= $indent . '    <div id="setting-context">
';
                $buffer .= $indent . '        <div class="context-header-settings-menu">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
