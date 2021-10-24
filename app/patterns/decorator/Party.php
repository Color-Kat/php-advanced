<?php

class Party implements IElections
{
    public function promises(): string
    {
        // базовое поведение - все партии обещают повысить зарплату
        return 'Мы повысим вам зарплату!';
    }
}
