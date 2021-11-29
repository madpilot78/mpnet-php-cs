<?php

/**
 * Bans the use of the PHP long array syntax.
 *
 * @author    Guido Falsi <mad@madpilot.net>
 * @license   https://github.com/madpilot78/mpnet-php-cs/blob/master/UNLICENSE UNLICENSE (Public Domain)
 */

namespace madpilot78\MPNetPHPCS\Sniffs\Arrays;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class ArrayDeclarationNoTrailingCommaSniff implements Sniff
{
    /**
     * Tokens we register for.
     *
     * @return array
     */
    public function register()
    {
        return [
            T_ARRAY,
            T_OPEN_SHORT_ARRAY
        ];
    }

    /**
     * Processes this sniff, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The current file being checked.
     * @param int                         $stackPtr  The position of the current token in
     *                                               the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        if ($tokens[$stackPtr]['code'] === T_ARRAY) {
            $phpcsFile->recordMetric($stackPtr, 'Short array syntax used', 'no');

            $arrayStart = $tokens[$stackPtr]['parenthesis_opener'];

            if (isset($tokens[$arrayStart]['parenthesis_closer']) === false) {
                return;
            }

            $arrayEnd = $tokens[$arrayStart]['parenthesis_closer'];
        } else {
            $phpcsFile->recordMetric($stackPtr, 'Short array syntax used', 'yes');

            $arrayStart = $stackPtr;
            $arrayEnd = $tokens[$stackPtr]['bracket_closer'];
        }

        // Ignore empty array
        $content = $phpcsFile->findNext(T_WHITESPACE, $arrayStart + 1, $arrayEnd + 1, true);
        if ($content === $arrayEnd) {
            return;
        }

        $lastcomma = $phpcsFile->findPrevious(T_COMMA, $arrayEnd - 1, $arrayStart + 1, false, null, true);
        $lastNotCommaWS = $phpcsFile->findPrevious(
            [T_COMMA, T_WHITESPACE],
            $arrayEnd - 1,
            $arrayStart + 1,
            true,
            null,
            true
        );

        /*
         * if there is a comma after any other content (excluding whitespace), we have a trailing comma
         */
        if ($lastNotCommaWS <= $lastcomma) {
            $error = 'Trailing comma in Array declaration';
            $fix = $phpcsFile->addFixableError($error, $lastcomma, 'TrailingComma');
            if ($fix === true) {
                $phpcsFile->fixer->replaceToken($lastcomma, '');
            }
        }
    }
}
