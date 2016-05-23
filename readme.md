# SORTD LIST WITH OCCURRENCES BY CONTENTS #
This tool retrieves the words list of any contents with the count of occurrences of each word.

Usage
-----
<code>$Slwo = new Slwo($contents);</code>

<code>$Slwo->minChars(1);</code>

<code>$Slwo->sort('ksort');</code>

<code>$Slwo->htmlOutput();</code>

Contents from a URL:

<code>$contents = file_get_contents('https://en.wikipedia.org/wiki/Hello,_Dolly!_(musical)');</code>

Note
----
This is a technical test made for a company that requested it. Full OO approach.<br/>TIME: 40 minutes.