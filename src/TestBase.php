<?php
/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 18/11/2015
 * Time: 16:06
 */

namespace Padosoft\LaravelTest;

use Padosoft\Test\traits\ExceptionTestable;
use Padosoft\Test\traits\FileSystemTestable;
use Padosoft\Test\traits\ReflectionTestable;

class TestBase extends \TestCase
{
    use ReflectionTestable, ExceptionTestable, FileSystemTestable;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
    }
}
