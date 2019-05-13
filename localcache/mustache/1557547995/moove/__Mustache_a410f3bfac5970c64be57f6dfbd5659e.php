<?php

class __Mustache_a410f3bfac5970c64be57f6dfbd5659e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '        <div class="forum-container">
';
        $buffer .= $indent . '            <button type="button" class="btn btn-danger btn-course-fs">Diễn đàn</button>
';
        $buffer .= $indent . '            <div class="forum-header mt-5">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="col-6 col-md-6">
';
        $buffer .= $indent . '                        <label style="padding-top:10px;font-weight:bold">Bài viết mới</label>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="new-write-box">
';
        $buffer .= $indent . '                <table class="new-write-table w-100">
';
        $buffer .= $indent . '                    <thead>
';
        $buffer .= $indent . '                        <tr class="row m-0">
';
        $buffer .= $indent . '                            <th class="col-6 col-md-5">Bài viết</th>
';
        $buffer .= $indent . '                            <th class="col-6 col-md-1"></th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-2">Tác giả</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-4">Chủ đề</th>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </thead>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <tbody>
';
        // 'forumnewstdata' section
        $value = $context->find('forumnewstdata');
        $buffer .= $this->section0c16ee0f9f536895afe8fd12120160ee($context, $indent, $value);
        $buffer .= $indent . '                      
';
        $buffer .= $indent . '                    </tbody>
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                </table>
';
        $buffer .= $indent . '               
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div style="text-align:center;padding-top:20px;">
';
        $buffer .= $indent . '                <button type="button" class="btn btn-success btn-course-fs mt-4">Diễn đàn</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="forum-general-box">
';
        $buffer .= $indent . '                <div class="forum-general-header">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-6 col-md-6 forum-general-btn">
';
        $buffer .= $indent . '                            General <i class="fa fa-sort-desc" aria-hidden="true"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <table class="forum-general-table w-100">
';
        $buffer .= $indent . '                    <thead>
';
        $buffer .= $indent . '                        <tr class="row m-0">
';
        $buffer .= $indent . '                            <th class="col-9 col-md-3">Chủ đề</th>
';
        $buffer .= $indent . '                            <th class="col-3 col-md-1"></th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Ngày tạo</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-2">Số bài viết</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Bài viết mới</th>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </thead>
';
        $buffer .= $indent . '                    <tbody>
';
        // 'forumgeneraldata' section
        $value = $context->find('forumgeneraldata');
        $buffer .= $this->section91ee2247ca7a04f71e2e514556cb9861($context, $indent, $value);
        $buffer .= $indent . '                    </tbody>
';
        $buffer .= $indent . '                </table>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="forum-general-box">
';
        $buffer .= $indent . '                <div class="forum-general-header">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-6 col-md-6 forum-general-btn">
';
        $buffer .= $indent . '                            Blog <i class="fa fa-sort-desc" aria-hidden="true"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <table class="forum-general-table w-100">
';
        $buffer .= $indent . '                    <thead>
';
        $buffer .= $indent . '                        <tr class="row m-0">
';
        $buffer .= $indent . '                            <th class="col-9 col-md-3">Chủ đề</th>
';
        $buffer .= $indent . '                            <th class="col-3 col-md-1"></th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Ngày tạo</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-2">Số bài viết</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Bài viết mới</th>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </thead>
';
        $buffer .= $indent . '                    <tbody>
';
        // 'forumblogdata' section
        $value = $context->find('forumblogdata');
        $buffer .= $this->sectionFebce1bf22e2ff61f2fd0d0dda438674($context, $indent, $value);
        $buffer .= $indent . '                    </tbody>
';
        $buffer .= $indent . '                </table>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="forum-general-box">
';
        $buffer .= $indent . '                <div class="forum-general-header">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-6 col-md-6 forum-general-btn">
';
        $buffer .= $indent . '                            Single <i class="fa fa-sort-desc" aria-hidden="true"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                       
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <table class="forum-general-table w-100">
';
        $buffer .= $indent . '                    <thead>
';
        $buffer .= $indent . '                        <tr class="row m-0">
';
        $buffer .= $indent . '                            <th class="col-9 col-md-3">Chủ đề</th>
';
        $buffer .= $indent . '                            <th class="col-3 col-md-1"></th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Ngày tạo</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-2">Số bài viết</th>
';
        $buffer .= $indent . '                            <th class="d-none d-sm-block col-md-3">Bài viết mới</th>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </thead>
';
        $buffer .= $indent . '                    <tbody>
';
        // 'forumsingledata' section
        $value = $context->find('forumsingledata');
        $buffer .= $this->sectionB2a370bf83c61a9b9b8e4e049669481c($context, $indent, $value);
        $buffer .= $indent . '                    </tbody>
';
        $buffer .= $indent . '                </table>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>';

        return $buffer;
    }

    private function section0c16ee0f9f536895afe8fd12120160ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="row m-0">
                            <td class="col-9 col-md-5 botron-trai">
                                {{{disscussurl}}}
                            </td>
                            <td class="col-3 col-md-1 square-control border-giua">
                                {{{subcribe}}}
                            </td>
                            <td class="d-none d-sm-block col-md-2 border-giua">{{{userurl}}}</td>
                            <td class="d-none d-sm-block col-md-4 botron-phai">{{{viewurl}}}</td>
                        </tr>
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
                
                $buffer .= $indent . '                        <tr class="row m-0">
';
                $buffer .= $indent . '                            <td class="col-9 col-md-5 botron-trai">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('disscussurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="col-3 col-md-1 square-control border-giua">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subcribe'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-2 border-giua">';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-4 botron-phai">';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91ee2247ca7a04f71e2e514556cb9861(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="row m-0">
                            <td class="col-9 col-md-3 botron-trai">
                              <img src="../newsvnr/pix/comment-icon.svg" height="25px" width="25px"> {{{viewurl}}}
                            </td>
                            <td class="col-3 col-md-1 square-control border-giua">
                                {{{subcribe}}}
                            </td>
                            <td class="d-none d-sm-block col-md-3 border-giua">{{{createtime}}}</td>
                            <td class="d-none d-sm-block col-md-2 border-giua">{{postnumber}}</td>
                            <td class="d-none d-sm-block col-md-3 botron-phai">{{{disscussurl}}} </br>by:<i class="forum-user">{{{userurl}}}
                        </tr>
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
                
                $buffer .= $indent . '                        <tr class="row m-0">
';
                $buffer .= $indent . '                            <td class="col-9 col-md-3 botron-trai">
';
                $buffer .= $indent . '                              <img src="../newsvnr/pix/comment-icon.svg" height="25px" width="25px"> ';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="col-3 col-md-1 square-control border-giua">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subcribe'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 border-giua">';
                $value = $this->resolveValue($context->find('createtime'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-2 border-giua">';
                $value = $this->resolveValue($context->find('postnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 botron-phai">';
                $value = $this->resolveValue($context->find('disscussurl'), $context);
                $buffer .= $value;
                $buffer .= ' </br>by:<i class="forum-user">';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFebce1bf22e2ff61f2fd0d0dda438674(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="row m-0">
                       <tr class="row m-0">
                            <td class="col-9 col-md-3 botron-trai">
                                {{{viewurl}}}
                            </td>
                            <td class="col-3 col-md-1 square-control border-giua">
                                {{{subcribe}}}
                            </td>
                            <td class="d-none d-sm-block col-md-3 border-giua">{{{createtime}}}</td>
                            <td class="d-none d-sm-block col-md-2 border-giua">{{postnumber}}</td>
                            <td class="d-none d-sm-block col-md-3 botron-phai">{{{disscussurl}}} </br>by:<i class="forum-user">{{{userurl}}}
                        </tr>
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
                
                $buffer .= $indent . '                        <tr class="row m-0">
';
                $buffer .= $indent . '                       <tr class="row m-0">
';
                $buffer .= $indent . '                            <td class="col-9 col-md-3 botron-trai">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="col-3 col-md-1 square-control border-giua">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subcribe'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 border-giua">';
                $value = $this->resolveValue($context->find('createtime'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-2 border-giua">';
                $value = $this->resolveValue($context->find('postnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 botron-phai">';
                $value = $this->resolveValue($context->find('disscussurl'), $context);
                $buffer .= $value;
                $buffer .= ' </br>by:<i class="forum-user">';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a370bf83c61a9b9b8e4e049669481c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="row m-0">
                            <td class="col-9 col-md-3 botron-trai">
                                {{{viewurl}}}
                            </td>
                            <td class="col-3 col-md-1 square-control border-giua">
                                {{{subcribe}}}
                               
                            </td>
                            <td class="d-none d-sm-block col-md-3 border-giua">{{{createtime}}}</td>
                            <td class="d-none d-sm-block col-md-2 border-giua">{{postnumber}}</td>
                            <td class="d-none d-sm-block col-md-3 botron-phai">{{{disscussurl}}} </br>by:<i class="forum-user">{{{userurl}}}
                        </tr>
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
                
                $buffer .= $indent . '                        <tr class="row m-0">
';
                $buffer .= $indent . '                            <td class="col-9 col-md-3 botron-trai">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="col-3 col-md-1 square-control border-giua">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subcribe'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                               
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 border-giua">';
                $value = $this->resolveValue($context->find('createtime'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-2 border-giua">';
                $value = $this->resolveValue($context->find('postnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="d-none d-sm-block col-md-3 botron-phai">';
                $value = $this->resolveValue($context->find('disscussurl'), $context);
                $buffer .= $value;
                $buffer .= ' </br>by:<i class="forum-user">';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
