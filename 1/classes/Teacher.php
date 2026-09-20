<?php
require_once "Person.php";

class Teacher extends Person
{
    private string $przedmiot;

    public function __construct(string $name, int $age, string $przedmiot)
    {
        parent::__construct($name, $age);
        $this->przedmiot = $przedmiot;
    }
    public function getInfo(): string
    {
        return "Imię {$this->name}, wiek {$this->age}, przedmiot: {$this->przedmiot}";

    }
    public function getHtml(): string
    {
        return <<<HTML
        <div class="teacher">
            <h2>{this->name}</h2>
            <p>Wiek: {this->age}</p>
            <p>Przedmiot {this->przedmiot}</p>
</div>
HTML;
    }
}