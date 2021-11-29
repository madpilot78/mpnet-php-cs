<?php

namespace  madpilot78\MPNetPHPCS\Tests\Arrays;

use madpilot78\MPNetPHPCS\Tests\AbstractSniffUnitTest;

class ArrayDeclarationNoTrailingCommaUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    public function getErrorList($testFile = '')
    {
        switch ($testFile) {
            case 'ArrayDeclarationNoTrailingCommaUnitTest.inc':
                return [
                    10  => 1,
                    25  => 1,
                    42  => 1,
                    55  => 1,
                    71  => 1,
                    72  => 1,
                    88  => 1,
                    101 => 1,
                    117 => 1,
                    118 => 1,
                    127 => 1,
                    144 => 1,
                    149 => 1,
                    166 => 1
                ];

            default:
                return [];
        }
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];
    }
}
