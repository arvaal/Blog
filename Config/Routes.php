<?php

return [
    '~^user/(.*)$~' => ['Controllers\Home', 'welcome'],
    '~^$~' => ['Controllers\Home', 'home']
];

