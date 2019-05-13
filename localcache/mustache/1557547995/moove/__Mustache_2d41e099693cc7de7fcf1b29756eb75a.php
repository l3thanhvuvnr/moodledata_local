<?php

class __Mustache_2d41e099693cc7de7fcf1b29756eb75a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->sectionD243dcb6487dd6ea305dfb486bed2ad2($context, $indent, $value);

        return $buffer;
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
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
                
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61953f39302cd35a392f69f01f08f352(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li data-target="#mooveslideshow" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
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
                
                $buffer .= $indent . '    <li data-target="#mooveslideshow" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB776e185f39831c09db4c21d623851c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="title">{{{ title }}}</h2>';
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
                
                $buffer .= '<h2 class="title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32815430606f0c4d6328720ea77f5488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="caption">{{{ caption }}}</div>';
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
                
                $buffer .= '<div class="caption">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a09456726fca60ce646391c5166bfb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="carousel-item {{#active}}active{{/active}}">
        <img class="d-block w-100 animated fadeIn" src="{{{ image }}}" alt="{{{ slidercap }}}">

        <div class="carousel-caption d-none d-md-block animated fadeInRightBig">
            {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

            {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
            <div class="container py-2">

                <div class="row">
                    <div class="input-group col-12">
                        {{{output.course_search_form_fp}}}
                    </div>
                </div>

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
                
                $buffer .= $indent . '    <div class="carousel-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <img class="d-block w-100 animated fadeIn" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('slidercap'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="carousel-caption d-none d-md-block animated fadeInRightBig">
';
                $buffer .= $indent . '            ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->sectionB776e185f39831c09db4c21d623851c6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                // 'caption' section
                $value = $context->find('caption');
                $buffer .= $this->section32815430606f0c4d6328720ea77f5488($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <div class="container py-2">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="input-group col-12">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.course_search_form_fp'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD243dcb6487dd6ea305dfb486bed2ad2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="mooveslideshow" class="carousel slide m-0"  data-interval="5000">
 <ol class="carousel-indicators">
    {{#slides}}
    <li data-target="#mooveslideshow" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
    {{/slides}}
</ol>
<div class="carousel-inner">
    {{#slides}}
    <div class="carousel-item {{#active}}active{{/active}}">
        <img class="d-block w-100 animated fadeIn" src="{{{ image }}}" alt="{{{ slidercap }}}">

        <div class="carousel-caption d-none d-md-block animated fadeInRightBig">
            {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

            {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
            <div class="container py-2">

                <div class="row">
                    <div class="input-group col-12">
                        {{{output.course_search_form_fp}}}
                    </div>
                </div>

            </div>

        </div>





    {{/slides}}
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
                
                $buffer .= $indent . '<div id="mooveslideshow" class="carousel slide m-0"  data-interval="5000">
';
                $buffer .= $indent . ' <ol class="carousel-indicators">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section61953f39302cd35a392f69f01f08f352($context, $indent, $value);
                $buffer .= $indent . '</ol>
';
                $buffer .= $indent . '<div class="carousel-inner">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section5a09456726fca60ce646391c5166bfb3($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
