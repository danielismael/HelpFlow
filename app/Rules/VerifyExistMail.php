<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class VerifyExistMail implements InvokableRule
{
    public function __construct(private $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed $value
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail) {
        if(!$this->userInterface->get_email($value) ) {
            $fail('O e-mail informado não foi encontrado em nossos registros. Por favor, verifique o endereço de e-mail fornecido.');
        }
    }
}
