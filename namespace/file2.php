<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-01-25
 * Time: 10:34
 */
namespace Foo\Bar;
include 'file1.php';

const FOO = 2;
function foo() {}
class  foo
{
    static function staticmethod() {}
    public function detail()
    {
        return '我是Foo\Bar空间';
    }
}


/* 非限定名称 */
foo();
foo::staticmethod();
echo '非限定名称' . FOO . PHP_EOL;
$a = new foo();
echo $a->detail() . PHP_EOL;
/* 限定名称 */
subnamespace\foo();
subnamespace\foo::staticmethod();
echo '限定名称' . subnamespace\FOO . PHP_EOL;
$c = new subnamespace\foo;
echo $c->detail() . PHP_EOL;
/* 完全限定名称 */
\Foo\Bar\foo();
\Foo\Bar\foo::staticmethod();
echo '完全限定名称' . \Foo\Bar\FOO . PHP_EOL;
