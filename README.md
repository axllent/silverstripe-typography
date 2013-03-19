# Typography test page for SilverStripe
A simple extension (extending Page) to add a simple typography test page to see your website styles.

It includes a JavaScript function to add element titles to all elements in the test page to help you
see what element is which.

## Requirements
* SilverStripe 2+
* SilverStripe 3+

## Usage
Install the module, run a flush=1 and access your website with /typo (eg: www.example.com/typo).

If you need a customised layout then add a Layout/Typo.ss template in your theme directory and
<pre>
&lt;% include Typography %&gt;
</pre>
