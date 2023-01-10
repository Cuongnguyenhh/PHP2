<?php
class Field{
    public  const TYPE_TEXT ='test';
    public const TYPE_WORD = 'password';
    public const TYPE_NUMBER = 'number';
    public string $type;
    public  string $atribute;

    public function __construct(string $atribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->atribute = $atribute;
    }
    public function __toString()
    {
       return printf('<div class="form-group">
       <label>$s</label>
       )
    }
}