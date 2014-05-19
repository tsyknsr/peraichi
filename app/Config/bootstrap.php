<?php

// CakePHP Environment Plugnの読み込み
CakePlugin::load('Environment');
App::uses('Environment', 'Environment.Lib');
Environment::load(); // check env and loading each env bootstrap.php