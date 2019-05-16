<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/16 0016
 * Time: 上午 10:45
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        header('Access-Control-Allow-Origin: http://localhost:9527');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, X-Token, Accept');
        //此处或许应该对cookie进行检查，才能设为true
        header('Access-Control-Allow-Credentials: true');
        return json(['message' => __FUNCTION__.": ".date('d日 h:m:s',strtotime('now')), 'code' => 20000]);
    }
}
