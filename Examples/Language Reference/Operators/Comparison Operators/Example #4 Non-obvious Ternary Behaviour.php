<?php
// on first glance, the following appears to output 'true'
echo (true?'true':false?'t':'f');

// however, the actual output of the above is 't'
// this is because ternary expressions are evaluated from left to right

// the following is a more obvious version of the same code as above
echo ((true ? 'true' : false) ? 't' : 'f');

// here, you can see that the first expression is evaluated to 'true', which
// in turn evaluates to (bool)true, thus returning the true branch of the
// second ternary expression.
