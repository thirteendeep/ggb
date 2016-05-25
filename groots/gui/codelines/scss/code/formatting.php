<pre>
<code class="lang-js">
<span class="c">// The serial-killer might find you</span>
.selector {
    width: 100*5/10*4; // <span class="c">Not sure of the operation order</span>
}

<span class="c">// The serial-killer will leave you alone</span>
.selector {
    width: (100 * 5) / (10 * 4); <span class="c">// A lot clearer</span>
}

<span class="c">// The serial-killer might find you</span>
.selector {
    width: $variable-a * 5 - 2; <span class="c">// What's the reason of this operation?</span>
}

<span class="c">// The serial-killer will leave you alone</span>
.selector {
    width: $variable-a * 0.25; <span class="c">// Get 25% of $variable-a value</span>
}
</code>
</pre>
