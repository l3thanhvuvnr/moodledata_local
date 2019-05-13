<?php

class __Mustache_8e9dd4db48feb5ffa2327225a176ac39 extends Mustache_Template
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-12 p-0">
';
        $buffer .= $indent . '            <div class="tab-content" id="mypublic-tab">
';
        // 'hascourses' section
        $value = $context->find('hascourses');
        $buffer .= $this->sectionA2869b54de0f2ed1bc6c8c79a1cd9759($context, $indent, $value);
        $buffer .= $indent . '            </div>                           
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7599cc4d29ce4551769563990a54f367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startedon, theme_moove';
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
                
                $buffer .= 'startedon, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbecad175d7ebb4e184f3f43ce6178ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{startdate}}, %A, %d %B %Y ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('startdate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', %A, %d %B %Y ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c3b458804df223e783cd2b9f85139a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<small class="text-date">{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>';
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
                
                $buffer .= '<small class="text-date">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7599cc4d29ce4551769563990a54f367($context, $indent, $value);
                $buffer .= ': ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->sectionFbecad175d7ebb4e184f3f43ce6178ec($context, $indent, $value);
                $buffer .= '</small>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section743f40af614f0b2ba0a467d21273207e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                <div class="progress-circle" data-progress="{{ progress }}"></div>
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
                
                $buffer .= $indent . '                            <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
';
                $buffer .= $indent . '                                <div class="progress-circle" data-progress="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section942a96174c5664d455cb61a3f8486498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="course-{{ id }}" class="card fp-mg course-bs">
                        <div class="card-body row">
                            <div class="col-md-2 col-sm-6 courseimage">
                                {{{ courseimage }}}
                            </div>
                            <div class="media-body col-md-9 col-sm-6">
                                <a href="{{ link }}"><h5 class="mt-0 text-tt">{{{ fullname }}}</h5></a>
                                {{# startdate }}<small class="text-date">{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>{{/ startdate }}
                                <div class="mt-1">
                                    {{{ summary }}}
                                </div>
                            </div>
                            {{# enablecompletion }}
                            <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                <div class="progress-circle" data-progress="{{ progress }}"></div>
                            </div>
                            {{/ enablecompletion }}
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
                
                $buffer .= $indent . '                    <div id="course-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="card fp-mg course-bs">
';
                $buffer .= $indent . '                        <div class="card-body row">
';
                $buffer .= $indent . '                            <div class="col-md-2 col-sm-6 courseimage">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="media-body col-md-9 col-sm-6">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><h5 class="mt-0 text-tt">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</h5></a>
';
                $buffer .= $indent . '                                ';
                // 'startdate' section
                $value = $context->find('startdate');
                $buffer .= $this->section5c3b458804df223e783cd2b9f85139a3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <div class="mt-1">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                // 'enablecompletion' section
                $value = $context->find('enablecompletion');
                $buffer .= $this->section743f40af614f0b2ba0a467d21273207e($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2869b54de0f2ed1bc6c8c79a1cd9759(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="tab-pane fade show active" id="cursos" role="tabpanel" aria-labelledby="courses-tab">
                    {{# courses }}
                    <div id="course-{{ id }}" class="card fp-mg course-bs">
                        <div class="card-body row">
                            <div class="col-md-2 col-sm-6 courseimage">
                                {{{ courseimage }}}
                            </div>
                            <div class="media-body col-md-9 col-sm-6">
                                <a href="{{ link }}"><h5 class="mt-0 text-tt">{{{ fullname }}}</h5></a>
                                {{# startdate }}<small class="text-date">{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>{{/ startdate }}
                                <div class="mt-1">
                                    {{{ summary }}}
                                </div>
                            </div>
                            {{# enablecompletion }}
                            <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                <div class="progress-circle" data-progress="{{ progress }}"></div>
                            </div>
                            {{/ enablecompletion }}
                        </div>
                    </div>
                    {{/ courses }}
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
                
                $buffer .= $indent . '                <div class="tab-pane fade show active" id="cursos" role="tabpanel" aria-labelledby="courses-tab">
';
                // 'courses' section
                $value = $context->find('courses');
                $buffer .= $this->section942a96174c5664d455cb61a3f8486498($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
