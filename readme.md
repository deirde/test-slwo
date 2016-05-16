Sorted list with occurrences by contents.
==============

This tool is intended to retrieve the words list of any contents with the count of occurrences of each word.


Usage
--------------------
<code>$Slwo = new Slwo($contents);</code>

<code>$Slwo->min(1);</code>

<code>$Slwo->sort('ksort');</code>

<code>$Slwo->htmlOutput();</code>

Contents from a URL:

<code>$contents = file_get_contents('https://en.wikipedia.org/wiki/Hello,_Dolly!_(musical)');</code>