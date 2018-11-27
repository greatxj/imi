<?php
namespace Imi\Cache\Annotation;

use Imi\Bean\Annotation;
use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 缓存驱逐注解
 * 
 * 方法体执行前，将指定缓存清除
 * 
 * @Annotation
 * @Target("METHOD")
 * @Parser("Imi\Cache\Annotation\Parser\CacheParser")
 */
class CacheEvict extends Base
{
    /**
     * 缓存器名称
     * 为null则使用默认缓存器
     *
     * @var string|null
     */
    public $name;

    /**
     * 键名
     * 支持{id}、{data.name}形式，代入参数
     * 如果为null，则使用全部参数，序列化后hash
     *
     * @var string
     */
    public $key;

}