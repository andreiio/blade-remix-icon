<?php

declare(strict_types=1);

namespace AndreiIonita\BladeRemixIcon\Tests;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('ri-star-line')->toHtml();

        $expected = <<<'SVG'
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z"/>
            </g>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('ri-star-line', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z"/>
            </g>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('ri-star-line', ['style' => 'fill: #F00'])->toHtml();

        $expected = <<<'SVG'
        <svg style="fill: #F00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z"/>
            </g>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }
}
