<?php

// 260 is the token value for the T_EVAL token
echo token_name(260);        // -> "T_EVAL"

// a token constant maps to its own name
echo token_name(T_FUNCTION); // -> "T_FUNCTION"
