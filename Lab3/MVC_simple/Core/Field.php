<?php
namespace Core;
class Field{
    public  const TYPE_TEXT ='test';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public string $type;
    public string $atribute;

    public function __construct(string $atribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->atribute = $atribute;
    }
    public function __toString(){
        return sprintf(
            '
       <div class="form-group">
        <label for="">%s</label>
        <input type="%s" name="%s">
       </div>
       ',
            $this->getLabel($this->atribute),
            $this->type,
            $this->atribute
        );
    }
    public function PasswordField(){
        $this -> type = self::TYPE_PASSWORD ;
        return $this;
    }
    public function labels(): array{
        return[
            'firstname' => "First name",
            'lastname' => "Last name",
            'email' => "Your email",
            'password' => "Password",
            'Confirmpassword' => "Confirm password"
        ];
    }
    public function getLabel($atribute)
    {
        return $this -> labels()[$atribute] ?? $atribute ;
    }
}
