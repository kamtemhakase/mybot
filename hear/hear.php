<?php

//(1)���O�t�@�C���̎w��
define('DEBUG'.'../debug.txt');

//(2)���N�G�X�g�̎擾
$input = file_get_contents('php://input');

//(3)���O�t�@�C���̏o��
file_put_contents(DEBUG,$input);