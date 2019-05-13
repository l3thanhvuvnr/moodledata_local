<?php

class __Mustache_e41684d231cb2727b5ebbcdc4b6b53c8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'headerdata' section
        $value = $context->find('headerdata');
        $buffer .= $this->sectionD6915441971a51b8268dcb928fa91c92($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'coursedata' section
        $value = $context->find('coursedata');
        $buffer .= $this->section892820f2207f09add8ba45eb59d2c64a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="btn-new-Related">
';
        $buffer .= $indent . '                <button type="button" class="btn btn-course-fs">Tin liên quan</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '                 <div class="new-Related-body">
';
        $buffer .= $indent . '                <div class="row">
';
        // 'courselqdata' section
        $value = $context->find('courselqdata');
        $buffer .= $this->section9e189eec4d07360ef26850f9ad002d31($context, $indent, $value);
        // 'courselqdata' section
        $value = $context->find('courselqdata');
        $buffer .= $this->section8e004045d371068d25110c4526f65143($context, $indent, $value);
        // 'courselqdata' section
        $value = $context->find('courselqdata');
        $buffer .= $this->sectionE448bae582ed5a1881ec75dfdab0072b($context, $indent, $value);
        $buffer .= $indent . '                   
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }

    private function sectionD6915441971a51b8268dcb928fa91c92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="container">
        <div class="new-detail-container">
            <div class="new-detail-title">
               {{title}}
            </div>
            <div class="new-detail-time">
                <small>{{time}}</small>
            </div>
            {{{content}}}
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-tag" aria-hidden="true"> Từ khóa: Doanh nghiệp, FTA</i>
                </div>
                <div class="col-md-6" style="text-align:right">
                    <i>Người đăng: </i> <i class="new-detail-user">{{{discussionart}}}</i>
                </div>
            </div>
           {{!  <div class="new-detail-btn">
                <button type="button" class="btn ">20 Lượt xem</button>
                <button type="button" class="btn ">12 Bình luận</button>
            </div> }}
                          <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
<div class="fb-comments" data-href="http://221.132.17.180:8089/local/newsvnr/news.php?id={{{discussionid}}}" data-width="100%" data-mobile="true" data-numposts="5"></div>
            <hr>
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
                
                $buffer .= $indent . ' <div class="container">
';
                $buffer .= $indent . '        <div class="new-detail-container">
';
                $buffer .= $indent . '            <div class="new-detail-title">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="new-detail-time">
';
                $buffer .= $indent . '                <small>';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-md-6">
';
                $buffer .= $indent . '                    <i class="fa fa-tag" aria-hidden="true"> Từ khóa: Doanh nghiệp, FTA</i>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-md-6" style="text-align:right">
';
                $buffer .= $indent . '                    <i>Người đăng: </i> <i class="new-detail-user">';
                $value = $this->resolveValue($context->find('discussionart'), $context);
                $buffer .= $value;
                $buffer .= '</i>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '                          <div id="fb-root"></div>
';
                $buffer .= $indent . '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
';
                $buffer .= $indent . '<div class="fb-comments" data-href="http://221.132.17.180:8089/local/newsvnr/news.php?id=';
                $value = $this->resolveValue($context->find('discussionid'), $context);
                $buffer .= $value;
                $buffer .= '" data-width="100%" data-mobile="true" data-numposts="5"></div>
';
                $buffer .= $indent . '            <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section892820f2207f09add8ba45eb59d2c64a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="container">
        <div class="new-detail-container">
            <div class="new-detail-title">
               {{title}}
            </div>
            <div class="new-detail-time">
                <small class="text-date">{{time}}</small>
            </div>

            {{! <h5>Cho rằng chế độ khen thưởng học sinh, sinh viên đoạt giải quốc gia, quốc tế còn thấp, Bộ Giáo dục đề xuất mở rộng đối tượng, tăng mức thưởng.</h5> }}
            {{{content}}}
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-tag" aria-hidden="true"> Từ khóa: Doanh nghiệp, FTA</i>
                </div>
                <div class="col-md-6" style="text-align:right">
                    <i>Người đăng: </i> <i class="new-detail-user">{{{discussionart}}}</i>
                </div>
            </div>
                                      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
<div class="fb-comments" data-href="http://221.132.17.180:8089/local/newsvnr/news.php?id={{{discussionid}}}" data-width="100%" data-mobile="true" data-numposts="5"></div>
          {{!   <div class="new-detail-btn">
                <button type="button" class="btn ">20 Lượt xem</button>
                <button type="button" class="btn ">12 Bình luận</button>
            </div> }}

  {{!           <div class="new-detail-comment">
                <div class="new-detail-comment-body">
                    <label class="new-detail-comment-title">Bình luận</label>
                    <textarea class="new-detail-comment-content" placeholder="Bạn nghĩ gì về tin này ?"></textarea>
                    <div class="new-detail-comment-control">
                        <button type="button" class="btn btn-cancel">Hủy</button>
                        <button type="button" class="btn btn-submit ">Gửi bình luận</button>
                    </div>
                </div>
            </div>
            <div class="new-detail-chat">
                <div class="row">
                    <div class="col chat-panel">
                        <div class="chat-image">
                            <img class="rounded-circle" src="images/download.jpg" />
                        </div>
                        <div class="chat-content">
                            <div class="chat-body">
                                <h3 class="name">Tu duong</h3>
                                <p class="title">Gogole abcddddd</p>
                                <p>Gogole abcddddd Gogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcddddd</p>
                            </div>
                            <div class="chat-footer">
                                <p id="chat-hidden"><i class="fa fa-chevron-down"> Ẩn phản hồi</i><i class="fa fa-chevron-up"> Ẩn phản hồi</i></p>

                                <div class="chat-reply">
                                    <!-- Comment 1 -->
                                    <div class="col chat-panel">
                                        <div class="chat-image">
                                            <img class="rounded-circle" src="images/download.jpg" />
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-body">
                                                <h3 class="name">Tu duong</h3>
                                                <p class="title">Gogole abcddddd</p>
                                                <p>Gogole abcddddd Gogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcddddd</p>
                                            </div>
                                            <div class="chat-footer">
                                                <label class="comment">Bình luận</label><label class="edit">Chỉnh sửa</label><label class="delete">Xóa</label><label class="feedback">Phản hồi</label><label class="date-feedback">9/4/2019, 3:12 PM</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- comment 2 -->
                                    <div class="col chat-panel">
                                        <div class="chat-image">
                                            <img class="rounded-circle" src="images/download.jpg" />
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-body">
                                                <h3 class="name">Tu duong</h3>
                                                <p class="title">Gogole abcddddd</p>
                                                <p>Gogole abcddddd Gogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcdddddGogole abcddddd</p>
                                            </div>
                                            <div class="chat-footer">
                                                <div class="chat-footer">
                                                    <label class="comment">Bình luận</label><label class="edit">Chỉnh sửa</label><label class="delete">Xóa</label><label class="feedback">Phản hồi</label><label class="date-feedback">9/4/2019, 3:12 PM</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat-comment">
                                    <div class="chat-image">
                                        <img class="rounded-circle" src="images/download.jpg" />
                                    </div>
                                    <div class="write-comment">
                                        <input id="note" class="form-control" placeholder="Viết bình luận" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="new-detail-see-more">
                <div class="new-detail-see-more-title">
                    <small class="new-detail-btn-see-more">Xem thêm bình luận</small>
                </div>
                    
               
            </div> }}
            <hr>
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
                
                $buffer .= $indent . ' <div class="container">
';
                $buffer .= $indent . '        <div class="new-detail-container">
';
                $buffer .= $indent . '            <div class="new-detail-title">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="new-detail-time">
';
                $buffer .= $indent . '                <small class="text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-md-6">
';
                $buffer .= $indent . '                    <i class="fa fa-tag" aria-hidden="true"> Từ khóa: Doanh nghiệp, FTA</i>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-md-6" style="text-align:right">
';
                $buffer .= $indent . '                    <i>Người đăng: </i> <i class="new-detail-user">';
                $value = $this->resolveValue($context->find('discussionart'), $context);
                $buffer .= $value;
                $buffer .= '</i>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '                                      <div id="fb-root"></div>
';
                $buffer .= $indent . '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
';
                $buffer .= $indent . '<div class="fb-comments" data-href="http://221.132.17.180:8089/local/newsvnr/news.php?id=';
                $value = $this->resolveValue($context->find('discussionid'), $context);
                $buffer .= $value;
                $buffer .= '" data-width="100%" data-mobile="true" data-numposts="5"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c539805a0dd3149f3c1126b01bf1ad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                        <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
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
                
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                        <div class="new-Related-img">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                         <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><h6 class="new-Related-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h6></a>
';
                $buffer .= $indent . '                        <small class="text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '                        <br />
';
                $buffer .= $indent . '                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">';
                $value = $this->resolveValue($context->find('discussionart'), $context);
                $buffer .= $value;
                $buffer .= '</small>
';
                $buffer .= $indent . '                        <p class="p-courselq">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </p>
';
                $buffer .= $indent . '                        <label class="new-Related-comment-info">
';
                $buffer .= $indent . '                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '                        </label>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e189eec4d07360ef26850f9ad002d31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#key1}}
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                        <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
                        </label>
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
                $buffer .= $this->section1c539805a0dd3149f3c1126b01bf1ad9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2d5866eec9c757b8516017aafe62479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                       <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                         <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
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
                
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                        <div class="new-Related-img">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                         <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><h6 class="new-Related-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h6></a>
';
                $buffer .= $indent . '                        <small class="text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '                        <br />
';
                $buffer .= $indent . '                       <small class="text-date">Người đăng: </small> <small class="new-Related-user">';
                $value = $this->resolveValue($context->find('discussionart'), $context);
                $buffer .= $value;
                $buffer .= '</small>
';
                $buffer .= $indent . '                         <p class="p-courselq">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </p>
';
                $buffer .= $indent . '                        <label class="new-Related-comment-info">
';
                $buffer .= $indent . '                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '                        </label>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e004045d371068d25110c4526f65143(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#key2}}
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                       <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                         <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
                        </label>
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
                $buffer .= $this->sectionA2d5866eec9c757b8516017aafe62479($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA462c41134469445c6dd89bdd4e5bb51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                         <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
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
                
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                        <div class="new-Related-img">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                         <a href="';
                $value = $this->resolveValue($context->find('newsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><h6 class="new-Related-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h6></a>
';
                $buffer .= $indent . '                        <small class="text-date">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '                        <br />
';
                $buffer .= $indent . '                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">';
                $value = $this->resolveValue($context->find('discussionart'), $context);
                $buffer .= $value;
                $buffer .= '</small>
';
                $buffer .= $indent . '                         <p class="p-courselq">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </p>
';
                $buffer .= $indent . '                        <label class="new-Related-comment-info">
';
                $buffer .= $indent . '                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
';
                $buffer .= $indent . '                            <i class="fa fa-share" aria-hidden="true"> 26</i>
';
                $buffer .= $indent . '                        </label>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE448bae582ed5a1881ec75dfdab0072b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#key3}}
                    <div class="col-md-4">
                        <div class="new-Related-img">
                        <a href="{{newsurl}}"><img src="{{image}}"></a>
                        </div>
                         <a href="{{newsurl}}"><h6 class="new-Related-title">{{title}}</h6></a>
                        <small class="text-date">{{time}}</small>
                        <br />
                        <small class="text-date">Người đăng: </small> <small class="new-Related-user">{{{discussionart}}}</small>
                         <p class="p-courselq">
                            {{content}}
                        </p>
                        <label class="new-Related-comment-info">
                            <i class="fa fa-eye" aria-hidden="true"> 1009 &nbsp;</i>
                            <i class="fa fa-comment-o" aria-hidden="true"> 32 &nbsp;</i>
                            <i class="fa fa-share" aria-hidden="true"> 26</i>
                        </label>
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
                $buffer .= $this->sectionA462c41134469445c6dd89bdd4e5bb51($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
