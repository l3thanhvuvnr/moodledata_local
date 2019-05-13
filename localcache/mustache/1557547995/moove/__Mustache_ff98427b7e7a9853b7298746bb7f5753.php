<?php

class __Mustache_ff98427b7e7a9853b7298746bb7f5753 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'news' section
        $value = $context->find('news');
        $buffer .= $this->section6c82057e8d70f69be4a194bdbf231ca2($context, $indent, $value);
        $buffer .= '<a href="';
        $value = $this->resolveValue($context->find('showallurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'news' section
        $value = $context->find('news');
        $buffer .= $this->section9c934431205100ecb91aac33c789773f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'showall' section
        $value = $context->find('showall');
        $buffer .= $this->sectionCaa7ee0232da786ec7bc0fc61eff6d3a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'forumdatasearch' section
        $value = $context->find('forumdatasearch');
        $buffer .= $this->section8be9a35718b484a7d43b8e77cc53a200($context, $indent, $value);

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

    private function section1ca77801d38ab1e9457f9edf2afc99bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item1 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Play Button -->

			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
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
                
                $buffer .= $indent . '		<!-- Single Welcome Post -->
';
                $buffer .= $indent . '		<div class="single-welcome-post bg-img item1 wow fadeInUp" style="background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '			<!-- Play Button -->
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			<!-- Content -->
';
                $buffer .= $indent . '			<div class="welcome-post-content">
';
                $buffer .= $indent . '				<!-- Single Blog Post -->
';
                $buffer .= $indent . '				<div class="single-blog-post white">
';
                $buffer .= $indent . '					<div class="blog-content">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '						<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="post-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '						<div class="post-meta">
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> ';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
';
                $buffer .= $indent . '						</div>
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

    private function section953763d9115a2acee84c25f15a811215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{#key1}}
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item1 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Play Button -->

			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
					</div>
				</div>
			</div>
		</div>
		{{/key1}}
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
                
                // 'key1' section
                $value = $context->find('key1');
                $buffer .= $this->section1ca77801d38ab1e9457f9edf2afc99bc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1629ecd59f3d3d9883c24ff97ec02c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item2 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
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
                
                $buffer .= $indent . '		<!-- Single Welcome Post -->
';
                $buffer .= $indent . '		<div class="single-welcome-post bg-img item2 wow fadeInUp" style="background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '			<!-- Content -->
';
                $buffer .= $indent . '			<div class="welcome-post-content">
';
                $buffer .= $indent . '				<!-- Single Blog Post -->
';
                $buffer .= $indent . '				<div class="single-blog-post white">
';
                $buffer .= $indent . '					<div class="blog-content">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '						<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="post-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '						<div class="post-meta">
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> ';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
';
                $buffer .= $indent . '						</div>
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

    private function section9db61a2145e8a613405b560f8382e132(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{#key2}}
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item2 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
					</div>
				</div>
			</div>
		</div>
		{{/key2}}
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
                
                // 'key2' section
                $value = $context->find('key2');
                $buffer .= $this->sectionE1629ecd59f3d3d9883c24ff97ec02c9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd355b186d68b75c80db48e30cbf49fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item3 wow fadeInUp" style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
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
                
                $buffer .= $indent . '			<!-- Single Welcome Post -->
';
                $buffer .= $indent . '			<div class="single-welcome-post bg-img item3 wow fadeInUp" style="background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '				<!-- Content -->
';
                $buffer .= $indent . '				<div class="welcome-post-content">
';
                $buffer .= $indent . '					<!-- Single Blog Post -->
';
                $buffer .= $indent . '					<div class="single-blog-post style2 white">
';
                $buffer .= $indent . '						<div class="blog-content">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '							<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="post-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c8b2c8c460a4dd8477ac2e8939a7aee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key3}}
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item3 wow fadeInUp" style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
						</div>
					</div>
				</div>
			</div>
			{{/key3}}
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
                
                // 'key3' section
                $value = $context->find('key3');
                $buffer .= $this->sectionBd355b186d68b75c80db48e30cbf49fb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f011e8e221d25d45f8eedea7d7b6402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item4 wow fadeInUp"  style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
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
                
                $buffer .= $indent . '			<!-- Single Welcome Post -->
';
                $buffer .= $indent . '			<div class="single-welcome-post bg-img item4 wow fadeInUp"  style="background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '				<!-- Content -->
';
                $buffer .= $indent . '				<div class="welcome-post-content">
';
                $buffer .= $indent . '					<!-- Single Blog Post -->
';
                $buffer .= $indent . '					<div class="single-blog-post style2 white">
';
                $buffer .= $indent . '						<div class="blog-content">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '							<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="post-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e2eb897be010b79e5f3be2723ee78dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key4}}
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item4 wow fadeInUp"  style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
						</div>
					</div>
				</div>
			</div>
			{{/key4}}
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
                
                // 'key4' section
                $value = $context->find('key4');
                $buffer .= $this->section4f011e8e221d25d45f8eedea7d7b6402($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb126e9d5c432dff1b7492ed2acf7b6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					
					<small class="new-latest-time text-date">{{time}}</small>
					
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
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
                
                $buffer .= $indent . '			<div class="col-lg-3 ">
';
                $buffer .= $indent . '				<div class="new-latest-box">
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="new-latest-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><label class="new-latest-title mt-1">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label></a>
';
                $buffer .= $indent . '					
';
                $buffer .= $indent . '					<small class="new-latest-time text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '					
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<p class="new-latest-content">
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</p>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<div class="new-latest-comment-info">
';
                $buffer .= $indent . '								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22417196480bd52aa4cd0ff6c15b53b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key1}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					
					<small class="new-latest-time text-date">{{time}}</small>
					
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key1}}
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
                
                // 'key1' section
                $value = $context->find('key1');
                $buffer .= $this->sectionDb126e9d5c432dff1b7492ed2acf7b6e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF56fd17d8df9b3123aa5b6575bbbcbac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
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
                
                $buffer .= $indent . '			<div class="col-lg-3 ">
';
                $buffer .= $indent . '				<div class="new-latest-box">
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="new-latest-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><label class="new-latest-title mt-1">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label></a>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<small class="new-latest-time text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<p class="new-latest-content">
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</p>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<div class="new-latest-comment-info">
';
                $buffer .= $indent . '								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57079277311834246f7bd5b5ddf5f714(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key2}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key2}}
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
                
                // 'key2' section
                $value = $context->find('key2');
                $buffer .= $this->sectionF56fd17d8df9b3123aa5b6575bbbcbac($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a93046e63e3462615ae25fdfff62494(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key3}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key3}}
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
                
                // 'key3' section
                $value = $context->find('key3');
                $buffer .= $this->sectionF56fd17d8df9b3123aa5b6575bbbcbac($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section654ba64b83da056efd2b2ae33e607890(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#key4}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key4}}
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
                
                // 'key4' section
                $value = $context->find('key4');
                $buffer .= $this->sectionF56fd17d8df9b3123aa5b6575bbbcbac($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAde4d9efb61cd2b9bdce2c495e08b1e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
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
                
                $buffer .= $indent . '					<div class="col-lg-4">
';
                $buffer .= $indent . '						<div class="new-latest-box">
';
                $buffer .= $indent . '							<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="new-latest-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '							<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><label class="new-latest-title mt-1">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label></a>
';
                $buffer .= $indent . '							<br />
';
                $buffer .= $indent . '							<small class="new-latest-time text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '							<div class="row">
';
                $buffer .= $indent . '								<div class="col-lg-12">
';
                $buffer .= $indent . '									<p class="new-latest-content">
';
                $buffer .= $indent . '										';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '									</p>
';
                $buffer .= $indent . '								</div>
';
                $buffer .= $indent . '								<div class="col-lg-12">
';
                $buffer .= $indent . '									<div class="new-latest-comment-info">
';
                $buffer .= $indent . '										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
';
                $buffer .= $indent . '										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
';
                $buffer .= $indent . '										<i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '								</div>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d50b8ba5d0bc8f42b103b0718b3dad5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key1}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key1}}
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
                
                // 'key1' section
                $value = $context->find('key1');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4871965ffb93a77735278d71a81d49a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key2}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key2}}
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
                
                // 'key2' section
                $value = $context->find('key2');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9671893df4849d7387bd1df0cd6a605(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key3}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key3}}
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
                
                // 'key3' section
                $value = $context->find('key3');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf7013a8c65053579d32dd8fd248c3b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key4}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key4}}
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
                
                // 'key4' section
                $value = $context->find('key4');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f54d5bbbe4f15eba3e69b552e08182b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key5}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key5}}
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
                
                // 'key5' section
                $value = $context->find('key5');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5f535ed39e56fbc3d677389cc4d1fc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#key6}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key6}}
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
                
                // 'key6' section
                $value = $context->find('key6');
                $buffer .= $this->sectionAde4d9efb61cd2b9bdce2c495e08b1e5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a8e9b9dab568c50cf06089857ff2f53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							{{fullname}}
						</label>
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
                
                $buffer .= $indent . '					<div class="form-check">
';
                $buffer .= $indent . '						<input class="form-check-input" type="checkbox" id="gridCheck">
';
                $buffer .= $indent . '						<label class="form-check-label" for="gridCheck">
';
                $buffer .= $indent . '							';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '						</label>
';
                $buffer .= $indent . '					</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c82057e8d70f69be4a194bdbf231ca2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="container-new">
	<div class="new-head" style="margin-left: 10px; margin-right: 10px;">
		<div class="row mb-3">{{#btnaddnews}}{{{btnaddnews}}}{{/btnaddnews}}</div>
		<div class="row">
			<div class="col-md-6 col-lg-8 mb-1">
				<button type="button" class="btn btn-success btn-course-fs">Tin tức nổi bật</button>
			</div>
			<div class="col-md-12 col-lg-4 mb-1">
				<form class="form-inline" method="get">
					<div class="form-control-size">
						<div class="input-group">
							<input type="text" class="form-control" name="search" placeholder="Search">
							<button type="submit" class="btn btn-primary">
								<i class="	fa fa-search"></i>
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>

	<div class="hero-area d-flex flex-wrap">
	<div class="hero-single-section">
		{{#forumdata}}
		{{#key1}}
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item1 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Play Button -->

			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
					</div>
				</div>
			</div>
		</div>
		{{/key1}}
		{{/forumdata}}
	</div>

	<div class="hero-single-section">
		{{#forumdata}}
		{{#key2}}
		<!-- Single Welcome Post -->
		<div class="single-welcome-post bg-img item2 wow fadeInUp" style="background-image: url({{image}});">
			<!-- Content -->
			<div class="welcome-post-content">
				<!-- Single Blog Post -->
				<div class="single-blog-post white">
					<div class="blog-content">

						<a href="{{newsurl}}" class="post-title">{{title}}</a>
						<div class="post-meta">
							<a href="#"><img src="../newsvnr/pix/author.png" alt=""> By {{username}}</a>
							<a href="#"><img src="../newsvnr/pix/calender.png" alt=""> {{time}}</a>
							<a href="#"><img src="../newsvnr/pix/chat.png" alt=""> 5</a>
							{{! <a href="#"><img src="../newsvnr/pix/like.png" alt=""> 12k</a> }}
						</div>
					</div>
				</div>
			</div>
		</div>
		{{/key2}}
		{{/forumdata}}
		<div class="hero-second-section d-flex flex-wrap">
			{{#forumdata}}
			{{#key3}}
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item3 wow fadeInUp" style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
						</div>
					</div>
				</div>
			</div>
			{{/key3}}
			{{/forumdata}}
			{{#forumdata}}
			{{#key4}}
			<!-- Single Welcome Post -->
			<div class="single-welcome-post bg-img item4 wow fadeInUp"  style="background-image: url({{image}});">
				<!-- Content -->
				<div class="welcome-post-content">
					<!-- Single Blog Post -->
					<div class="single-blog-post style2 white">
						<div class="blog-content">

							<a href="{{newsurl}}" class="post-title">{{title}}</a>
						</div>
					</div>
				</div>
			</div>
			{{/key4}}
			{{/forumdata}}
		</div>

	</div>
	</div>

	<div class="container">
		<div class="btn-new-latest">
			<button type="button" class="btn btn-danger btn-course-fs">Tin mới nhất</button>
		</div>
		<div class="row new-latest-body">
			{{#forumnewestdata}}
			{{#key1}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					
					<small class="new-latest-time text-date">{{time}}</small>
					
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key1}}
			{{/forumnewestdata}}
			{{#forumnewestdata}}
			{{#key2}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key2}}
			{{/forumnewestdata}}
			{{#forumnewestdata}}
			{{#key3}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key3}}
			{{/forumnewestdata}}
			{{#forumnewestdata}}
			{{#key4}}
			<div class="col-lg-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/key4}}
			{{/forumnewestdata}}

		</div>

		<div class="btn-new-course">
			<button type="button" class="btn btn-primary btn-course-fs">Tin tức khóa học</button>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					{{#forumcoursenewsndata}}
					{{#key1}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key1}}
					{{/forumcoursenewsndata}}
					{{#forumcoursenewsndata}}
					{{#key2}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key2}}
					{{/forumcoursenewsndata}}
					{{#forumcoursenewsndata}}
					{{#key3}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key3}}
					{{/forumcoursenewsndata}}

					<div class="col-lg-12 new-control-size"></div>
					{{#forumcoursenewsndata}}
					{{#key4}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key4}}
					{{/forumcoursenewsndata}}
					{{#forumcoursenewsndata}}
					{{#key5}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key5}}
					{{/forumcoursenewsndata}}
					{{#forumcoursenewsndata}}
					{{#key6}}
					<div class="col-lg-4">
						<div class="new-latest-box">
							<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
							<a href="{{newsurl}}"><label class="new-latest-title mt-1">{{title}}</label></a>
							<br />
							<small class="new-latest-time text-date">{{time}}</small>
							<div class="row">
								<div class="col-lg-12">
									<p class="new-latest-content">
										{{content}}
									</p>
								</div>
								<div class="col-lg-12">
									<div class="new-latest-comment-info">
										<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
										<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
										<i class="fa fa-share" aria-hidden="true"> 26</i>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{/key6}}
					{{/forumcoursenewsndata}}

				</div>

			</div>
			<div class="col-lg-3">
				<div class="new-list-course">
					<i class="fa fa-bars" aria-hidden="true"> Danh sách khóa học</i>
					{{#courselist2}}
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							{{fullname}}
						</label>
					</div>
					{{/courselist2}}
					

				</div>
			</div>

		</div>

		<label class="view-more">';
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
                
                $buffer .= $indent . '<div class="container-new">
';
                $buffer .= $indent . '	<div class="new-head" style="margin-left: 10px; margin-right: 10px;">
';
                $buffer .= $indent . '		<div class="row mb-3">';
                // 'btnaddnews' section
                $value = $context->find('btnaddnews');
                $buffer .= $this->sectionCe2fb9483dbd23017073e1a586949ed6($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '		<div class="row">
';
                $buffer .= $indent . '			<div class="col-md-6 col-lg-8 mb-1">
';
                $buffer .= $indent . '				<button type="button" class="btn btn-success btn-course-fs">Tin tức nổi bật</button>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="col-md-12 col-lg-4 mb-1">
';
                $buffer .= $indent . '				<form class="form-inline" method="get">
';
                $buffer .= $indent . '					<div class="form-control-size">
';
                $buffer .= $indent . '						<div class="input-group">
';
                $buffer .= $indent . '							<input type="text" class="form-control" name="search" placeholder="Search">
';
                $buffer .= $indent . '							<button type="submit" class="btn btn-primary">
';
                $buffer .= $indent . '								<i class="	fa fa-search"></i>
';
                $buffer .= $indent . '							</button>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="hero-area d-flex flex-wrap">
';
                $buffer .= $indent . '	<div class="hero-single-section">
';
                // 'forumdata' section
                $value = $context->find('forumdata');
                $buffer .= $this->section953763d9115a2acee84c25f15a811215($context, $indent, $value);
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="hero-single-section">
';
                // 'forumdata' section
                $value = $context->find('forumdata');
                $buffer .= $this->section9db61a2145e8a613405b560f8382e132($context, $indent, $value);
                $buffer .= $indent . '		<div class="hero-second-section d-flex flex-wrap">
';
                // 'forumdata' section
                $value = $context->find('forumdata');
                $buffer .= $this->section6c8b2c8c460a4dd8477ac2e8939a7aee($context, $indent, $value);
                // 'forumdata' section
                $value = $context->find('forumdata');
                $buffer .= $this->section4e2eb897be010b79e5f3be2723ee78dc($context, $indent, $value);
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="container">
';
                $buffer .= $indent . '		<div class="btn-new-latest">
';
                $buffer .= $indent . '			<button type="button" class="btn btn-danger btn-course-fs">Tin mới nhất</button>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<div class="row new-latest-body">
';
                // 'forumnewestdata' section
                $value = $context->find('forumnewestdata');
                $buffer .= $this->section22417196480bd52aa4cd0ff6c15b53b0($context, $indent, $value);
                // 'forumnewestdata' section
                $value = $context->find('forumnewestdata');
                $buffer .= $this->section57079277311834246f7bd5b5ddf5f714($context, $indent, $value);
                // 'forumnewestdata' section
                $value = $context->find('forumnewestdata');
                $buffer .= $this->section8a93046e63e3462615ae25fdfff62494($context, $indent, $value);
                // 'forumnewestdata' section
                $value = $context->find('forumnewestdata');
                $buffer .= $this->section654ba64b83da056efd2b2ae33e607890($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		<div class="btn-new-course">
';
                $buffer .= $indent . '			<button type="button" class="btn btn-primary btn-course-fs">Tin tức khóa học</button>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<div class="row">
';
                $buffer .= $indent . '			<div class="col-lg-9">
';
                $buffer .= $indent . '				<div class="row">
';
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->section4d50b8ba5d0bc8f42b103b0718b3dad5($context, $indent, $value);
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->section4871965ffb93a77735278d71a81d49a8($context, $indent, $value);
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->sectionB9671893df4849d7387bd1df0cd6a605($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '					<div class="col-lg-12 new-control-size"></div>
';
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->sectionFf7013a8c65053579d32dd8fd248c3b8($context, $indent, $value);
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->section4f54d5bbbe4f15eba3e69b552e08182b($context, $indent, $value);
                // 'forumcoursenewsndata' section
                $value = $context->find('forumcoursenewsndata');
                $buffer .= $this->sectionF5f535ed39e56fbc3d677389cc4d1fc7($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="col-lg-3">
';
                $buffer .= $indent . '				<div class="new-list-course">
';
                $buffer .= $indent . '					<i class="fa fa-bars" aria-hidden="true"> Danh sách khóa học</i>
';
                // 'courselist2' section
                $value = $context->find('courselist2');
                $buffer .= $this->section3a8e9b9dab568c50cf06089857ff2f53($context, $indent, $value);
                $buffer .= $indent . '					
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		<label class="view-more">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c934431205100ecb91aac33c789773f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Xem thêm</a></label>
		{{! <div class="btn-new-departmental">
			<button type="button" class="btn btn-warning">Tin tức phòng ban</button>
		</div>

		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="resize">
							<img class="new-latest-image" src="images\\tin-moi-nhat\\3.jpg">
						</div>
					</div>
					<div class="col-lg-6">
						<label class="new-latest-title mt-1">5 thủ thuật đơn giản bạn nên biết khi dùng Netflix</label>
						<label class="new-latest-time text-date">Thứ 3 ngày 26 tháng 12 năm 2019 8:00 AM</label>
						<div class="row">
							<div class="col-lg-12">
								<p class="new-latest-content">Đây là chức năng rất yêu của Netflix, app cho phép bạn download phim lưu trong máy để vẫn xem được khi không có Internet. </p>
							</div>
							<div class="col-lg-12">
								<div class="new-latest-comment-info">
									<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
									<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
									<i class="fa fa-share" aria-hidden="true"> 26</i>
								</div>
							</div>
						</div>

					</div>
					<div class="col-lg-12 new-control-size"></div>
					<div class="col-lg-6">
						<div class="resize">
							<img class="new-latest-image" src="images\\tin-moi-nhat\\3.jpg">
						</div>
					</div>
					<div class="col-lg-6">
						<label class="new-latest-title mt-1">5 thủ thuật đơn giản bạn nên biết khi dùng Netflix</label>
						<label class="new-latest-time text-date">Thứ 3 ngày 26 tháng 12 năm 2019 8:00 AM</label>
						<div class="row">
							<div class="col-lg-12">
								<p class="new-latest-content">Đây là chức năng rất yêu của Netflix, app cho phép bạn download phim lưu trong máy để vẫn xem được khi không có Internet. </p>
							</div>
							<div class="col-lg-12">
								<div class="new-latest-comment-info">
									<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
									<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
									<i class="fa fa-share" aria-hidden="true"> 26</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




		</div>
		<label class="view-more">Xem thêm</label>
	</div>
	 }}
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
                
                $buffer .= 'Xem thêm</a></label>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11024706936ee0d22db0af2162f26c7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="col-lg-3 mb-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<label class="new-latest-title mt-1"><a href="{{newsurl}}">{{title}}</a></label>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
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
                
                $buffer .= $indent . '			<div class="col-lg-3 mb-3 ">
';
                $buffer .= $indent . '				<div class="new-latest-box">
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="new-latest-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '					<label class="new-latest-title mt-1"><a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></label>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<small class="new-latest-time text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<p class="new-latest-content">
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</p>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<div class="new-latest-comment-info">
';
                $buffer .= $indent . '								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCaa7ee0232da786ec7bc0fc61eff6d3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="container-new">
	<div class="container">
		<div class="btn-new-latest">
			<h3>Tất cả tin tức theo khóa học</h3>
		</div>
		<hr>
		<div class="row new-latest-body">
			{{#newestdatashowall}}
			<div class="col-lg-3 mb-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{image}}"></a>
					<label class="new-latest-title mt-1"><a href="{{newsurl}}">{{title}}</a></label>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{content}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/newestdatashowall}}	
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
                
                $buffer .= $indent . '<div class="container-new">
';
                $buffer .= $indent . '	<div class="container">
';
                $buffer .= $indent . '		<div class="btn-new-latest">
';
                $buffer .= $indent . '			<h3>Tất cả tin tức theo khóa học</h3>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<hr>
';
                $buffer .= $indent . '		<div class="row new-latest-body">
';
                // 'newestdatashowall' section
                $value = $context->find('newestdatashowall');
                $buffer .= $this->section11024706936ee0d22db0af2162f26c7b($context, $indent, $value);
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa6e6da5b4021fafb0d51685adc80ce5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="col-lg-3 mb-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{imageurl}}"></a>
					<a href="{{newsurn}}"><label class="new-latest-title mt-1">{{subject}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{message}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
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
                
                $buffer .= $indent . '			<div class="col-lg-3 mb-3 ">
';
                $buffer .= $indent . '				<div class="new-latest-box">
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="new-latest-image" src="';
                $value = $this->resolveValue($context->find('imageurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '					<a href="';
                $value = $this->resolveValue($context->find('newsurn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><label class="new-latest-title mt-1">';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label></a>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<small class="new-latest-time text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '					<br />
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<p class="new-latest-content">
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</p>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<div class="col-lg-12">
';
                $buffer .= $indent . '							<div class="new-latest-comment-info">
';
                $buffer .= $indent . '								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
';
                $buffer .= $indent . '								<i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '							</div>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f27d1c92fade26e2665ae4c17393aa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#forumsearchdata}}
			<div class="col-lg-3 mb-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{imageurl}}"></a>
					<a href="{{newsurn}}"><label class="new-latest-title mt-1">{{subject}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{message}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/forumsearchdata}}
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
                
                // 'forumsearchdata' section
                $value = $context->find('forumsearchdata');
                $buffer .= $this->sectionFa6e6da5b4021fafb0d51685adc80ce5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8be9a35718b484a7d43b8e77cc53a200(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div class="container-new">

	<div class="container">
		<div class="btn-new-latest">
			<h3>Tìm thấy {{newsnumber}} tin với từ khóa "{{searchquery}}"</h3>
		</div>
		<hr>
		<div class="row new-latest-body">
			{{#courseendable}}
			{{#forumsearchdata}}
			<div class="col-lg-3 mb-3 ">
				<div class="new-latest-box">
					<a href="{{newsurl}}"><img class="new-latest-image" src="{{imageurl}}"></a>
					<a href="{{newsurn}}"><label class="new-latest-title mt-1">{{subject}}</label></a>
					<br />
					<small class="new-latest-time text-date">{{time}}</small>
					<br />
					<div class="row">
						<div class="col-lg-12">
							<p class="new-latest-content">
								{{message}}
							</p>
						</div>
						<div class="col-lg-12">
							<div class="new-latest-comment-info">
								<i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp&nbsp</i>
								<i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp&nbsp</i>
								<i class="fa fa-share" aria-hidden="true"> 26</i>
							</div>
						</div>
					</div>

				</div>

			</div>
			{{/forumsearchdata}}
			{{/courseendable}}

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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="container-new">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="container">
';
                $buffer .= $indent . '		<div class="btn-new-latest">
';
                $buffer .= $indent . '			<h3>Tìm thấy ';
                $value = $this->resolveValue($context->find('newsnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' tin với từ khóa "';
                $value = $this->resolveValue($context->find('searchquery'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"</h3>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<hr>
';
                $buffer .= $indent . '		<div class="row new-latest-body">
';
                // 'courseendable' section
                $value = $context->find('courseendable');
                $buffer .= $this->section7f27d1c92fade26e2665ae4c17393aa8($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
