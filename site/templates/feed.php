<?php

echo page('blog')->children()->visible()->limit(10)->feed();