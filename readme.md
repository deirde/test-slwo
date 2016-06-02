# SORTED LIST WITH OCCURRENCES BY CONTENTS #
This tool retrieves the words list of any contents with the count of occurrences of each word.

Usage
-----
<code>$Slwo = new Slwo($contents);</code>

<code>$Slwo->minChars(1);</code>

<code>$Slwo->sort('ksort');</code>

<code>$Slwo->htmlOutput();</code>

Contents from a URL:

<code>$contents = file_get_contents('https://en.wikipedia.org/wiki/Hello,_Dolly!_(musical)');</code>

Specs
-----
Write a script that would read in a text file and produce an alphabetically sorted list of words with the count of occurrences of each word.
Full OO approach.

Note
----
This is a technical test. TIME: 40 minutes.