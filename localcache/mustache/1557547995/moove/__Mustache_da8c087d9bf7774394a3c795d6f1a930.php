<?php

class __Mustache_da8c087d9bf7774394a3c795d6f1a930 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="container outline-none" id="courseslider" tabindex="1">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '                <div id="news-slider6" class="owl-carousel owl-theme">
';
        // 'newscourse' section
        $value = $context->find('newscourse');
        $buffer .= $this->section427a080598d2e10e896760eb5ac8f946($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }

    private function section427a080598d2e10e896760eb5ac8f946(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="post-slide6">
                      
                     
                        <div class="post-img">
                            {{{courseimage}}}
                            <div class="post-info">
                                <ul class="category">
                                    <li>Học viên <a href="#">{{countstudent}}</a></li>
                                    <li>Giáo viên <a href="#">{{fullnamet}}</a></li>
                                   
                                </ul>
              
                            </div>
                        </div>
                        <div class="post-review">
                            <span class="icons">
                                   {{{imageteacher}}}
                            </span>
                            <h3 class="post-title"><a href="{{{link}}}" title="{{fullname}}">{{fullname}}</a></h3>
                            <p class="post-description" style="height:104px">{{summary}}</p>
                          
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
                
                $buffer .= $indent . '                    <div class="post-slide6">
';
                $buffer .= $indent . '                      
';
                $buffer .= $indent . '                     
';
                $buffer .= $indent . '                        <div class="post-img">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            <div class="post-info">
';
                $buffer .= $indent . '                                <ul class="category">
';
                $buffer .= $indent . '                                    <li>Học viên <a href="#">';
                $value = $this->resolveValue($context->find('countstudent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $buffer .= $indent . '                                    <li>Giáo viên <a href="#">';
                $value = $this->resolveValue($context->find('fullnamet'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $buffer .= $indent . '                                   
';
                $buffer .= $indent . '                                </ul>
';
                $buffer .= $indent . '              
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="post-review">
';
                $buffer .= $indent . '                            <span class="icons">
';
                $buffer .= $indent . '                                   ';
                $value = $this->resolveValue($context->find('imageteacher'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                            <h3 class="post-title"><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h3>
';
                $buffer .= $indent . '                            <p class="post-description" style="height:104px">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                          
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                     
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
