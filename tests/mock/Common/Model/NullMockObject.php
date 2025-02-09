<?php
namespace Sdk\Common\Model;

use Marmot\Interfaces\INull;

class NullMockObject extends MockObject implements INull
{
    private static $instance;

    public static function &getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function insert() : bool
    {
        return false;
    }
    
    public function update() : bool
    {
        return false;
    }

    public function enable() : bool
    {
        return false;
    }
    
    public function disable() : bool
    {
        return false;
    }
}
