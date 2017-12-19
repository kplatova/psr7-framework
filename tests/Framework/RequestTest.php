<?php

namespace Tests\Framework\Http;

use Framework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $_GET = [];
        $_POST = [];
    }

    public function testEmpty(): void
    {
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams(): void
    {
        $_GET = $data = [
            'name' => 'John',
            'age' => 28,
        ];

        $request1 = new Request();
        $request2 = new Request();

        self::assertEquals($data, $request1->getQueryParams());
        self::assertEquals($data, $request2->getQueryParams());
        self::assertNull($request1->getParsedBody());
        self::assertNull($request2->getParsedBody());
    }

    public function testParsedBody(): void
    {
        $_POST = $data = ['title' => 'title'];

        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertEquals($data, $request->getParsedBody());
    }
}