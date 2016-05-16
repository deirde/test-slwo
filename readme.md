Sorted list with occurrences by contents.
==============

This tool is intended to retrieve the words list of any contents with the count of occurrences of each word.


Usage
--------------------
<code>$Slwo = new Slwo($contents);<br/>
$Slwo->sort('ksort');<br/>
$Slwo->htmlOutput();</code>

Contents from a URL:

<code>$contents = file_get_contents('https://en.wikipedia.org/wiki/Hello,_Dolly!_(musical)');</code>