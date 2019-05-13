<?php

class __Mustache_2dbdb43d96eb33286ec59e7020af467c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '	
';
        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        
';
        // 'forumdata' section
        $value = $context->find('forumdata');
        $buffer .= $this->section6b6e1432fb494645207b92b0df990fcd($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6b6e1432fb494645207b92b0df990fcd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="col-md-12 fp-mg card course-bs outline-none" id="mydiscussion" tabindex="1">
			
			<div class="row p-2">
				<div class="col-8">
					<div class="parentbox1 p-2">
					<div class="row">
						<div class="col-1">
							
						</div>
						<div class="col-11">{{{discussurl}}}</div>
					</div>
					<div class="row">
						<div class="col-1">
						</div>
						<div class="col-11">
							<div class="rows">
								
							<div class="d-inline text-date">Khóa học:</div>
							<div class="d-inline">{{{courseurl}}}</div>
							</div>
						
							
						</div>
					</div>
					</div>
				</div>
				<div class="col-4">
					<div class="parentbox2 p-2" style="background: rgba(211, 211, 211, 0.7);border-radius: 10px; display: block;">
					<div class="row"><div class="col">{{{userurl}}}</div></div>
					<div class="row"><div class="col">
					<small class="text-date">{{{timeurl}}}</small>
					</div></div>
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
                
                $buffer .= $indent . '		<div class="col-md-12 fp-mg card course-bs outline-none" id="mydiscussion" tabindex="1">
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			<div class="row p-2">
';
                $buffer .= $indent . '				<div class="col-8">
';
                $buffer .= $indent . '					<div class="parentbox1 p-2">
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-1">
';
                $buffer .= $indent . '							
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-11">';
                $value = $this->resolveValue($context->find('discussurl'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-1">
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-11">
';
                $buffer .= $indent . '							<div class="rows">
';
                $buffer .= $indent . '								
';
                $buffer .= $indent . '							<div class="d-inline text-date">Khóa học:</div>
';
                $buffer .= $indent . '							<div class="d-inline">';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						
';
                $buffer .= $indent . '							
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="col-4">
';
                $buffer .= $indent . '					<div class="parentbox2 p-2" style="background: rgba(211, 211, 211, 0.7);border-radius: 10px; display: block;">
';
                $buffer .= $indent . '					<div class="row"><div class="col">';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= $value;
                $buffer .= '</div></div>
';
                $buffer .= $indent . '					<div class="row"><div class="col">
';
                $buffer .= $indent . '					<small class="text-date">';
                $value = $this->resolveValue($context->find('timeurl'), $context);
                $buffer .= $value;
                $buffer .= '</small>
';
                $buffer .= $indent . '					</div></div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>	
';
                $buffer .= $indent . '		</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
