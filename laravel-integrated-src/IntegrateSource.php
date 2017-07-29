<?php

namespace Lloricode\PaymentGateway;
use Form;
class IntegrateSource
{
	public function requireApi()
        {
                Form::token();
                require_once __DIR__.'../../cryptobox.class.php';
        }
}