<?php

class __Mustache_2c1f7df6d62f141c2174accd05e98f44 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="newslider" class="container magrin-block outline-none" tabindex="1">
';
        $buffer .= $indent . '  <div class="row mb-3">';
        // 'btnaddnews' section
        $value = $context->find('btnaddnews');
        $buffer .= $this->sectionCe2fb9483dbd23017073e1a586949ed6($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '  <div class="row"> 
';
        $buffer .= $indent . '     <div id="news-slider" class="owl-carousel owl-theme">
';
        // 'newslides' section
        $value = $context->find('newslides');
        $buffer .= $this->sectionEc9a79dab25ab9393099548008caa069($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '              <div class="slider_nav">
';
        $buffer .= $indent . '                  <button class="am-next m-0 p-0 border-0 text-white"><a class="left fa fa-chevron-left btn btn-dark"></a></button>
';
        $buffer .= $indent . '                  <button class="am-prev m-0 p-0 border-0 text-white"><a class="right fa fa-chevron-right btn btn-dark"></a></button>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
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

        return $buffer;
    }

    private function sectionCe2fb9483dbd23017073e1a586949ed6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{btnaddnews}}}';
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
                
                $value = $this->resolveValue($context->find('btnaddnews'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc9a79dab25ab9393099548008caa069(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="null">
              <div class="column-33">
                <img src="{{image}}" height="300px">
              </div>
              <div class="column-66" style="height:300px;background-color: white;">
                <div class="text-news-tt"><a href="{{newurl}}"><p class="text-tt">{{subject}}</p></a></div>
                <div class="text-news-ct"><p>{{message}}</p></div>
                <button class="btn btn-slider" type="button"><a href="{{newurl}}" style="color:white">Đọc thêm</a></button>
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
                
                $buffer .= $indent . '          <div class="null">
';
                $buffer .= $indent . '              <div class="column-33">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" height="300px">
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <div class="column-66" style="height:300px;background-color: white;">
';
                $buffer .= $indent . '                <div class="text-news-tt"><a href="';
                $value = $this->resolveValue($context->find('newurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><p class="text-tt">';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p></a></div>
';
                $buffer .= $indent . '                <div class="text-news-ct"><p>';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p></div>
';
                $buffer .= $indent . '                <button class="btn btn-slider" type="button"><a href="';
                $value = $this->resolveValue($context->find('newurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="color:white">Đọc thêm</a></button>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '   
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
