<?php

namespace MD\Rule;

use MD\Testing\RuleTestCase;

class DebugFunctionTest extends RuleTestCase
{
    protected function getRule()
    {
        return new DebugFunction();
    }
}
