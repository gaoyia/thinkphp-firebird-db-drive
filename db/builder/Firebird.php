<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: weianguo <366958903@qq.com>
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | 高奕 修改
// +----------------------------------------------------------------------
// | Copyright (c) 2019年5月18日21:41:40 gaoyia@qq.com
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 高奕 <gaoyia@qq.com>
// +----------------------------------------------------------------------

namespace think\db\builder;

use think\db\Builder;

/**
 * firebird数据库驱动
 */
class Firebird extends Builder
{
    protected $selectSql = 'SELECT %LIMIT% %DISTINCT% %FIELD% FROM %TABLE%%FORCE%%JOIN%%WHERE%%GROUP%%HAVING%%ORDER% %UNION%%LOCK%%COMMENT%';
    
    /**
     * limit分析
     * @access protected
     * @param  Query     $query        查询对象
     * @param mixed $limit
     * @return string
     */
    protected function parseLimit($query, $limit)
    {
        $limitStr = '';
        if (!empty($limit)) {
            $limit = explode(',', $limit);
            if (count($limit) > 1) {
                $limitStr = ' FIRST ' . $limit[1] . ' SKIP ' . $limit[0] . ' ';
            } else {
                $limitStr = ' FIRST ' . $limit[0] . ' ';
            }
        }
        return $limitStr;
    }

    
	
    /**
     * 随机排序
     * @access protected
     * @return string
     */
    protected function parseRand()
    {
        return 'rand()';
    }

}
